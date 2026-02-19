let editor;
let lastResponse = null;

window.onload = function () {
  editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    mode: "go",
    theme: "dracula",
    lineNumbers: true,
    autoCloseBrackets: true,
    tabSize: 4,
    indentUnit: 4,
  });

  // Listener para Abrir Archivo
  document.getElementById("fileInput").addEventListener("change", function (e) {
    const file = e.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function (e) {
      editor.setValue(e.target.result); // Poner contenido en el editor
    };
    reader.readAsText(file);
    // Limpiar el input para permitir recargar el mismo archivo si es necesario
    e.target.value = "";
  });
};

async function compilar() {
  const consoleDiv = document.getElementById("console");
  const astView = document.getElementById("ast-view");
  const btnRun = document.getElementById("btn-run");

  const codigo = editor.getValue();

  btnRun.disabled = true;
  btnRun.innerText = "Cargando ...";
  consoleDiv.innerText = "Compilando...";

  try {
    const response = await fetch("../compile.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ codigo: codigo }),
    });

    if (!response.ok) throw new Error("Error HTTP: " + response.status);

    const data = await response.json();
    lastResponse = data; // Guardar datos para descargas

    // 1. Consola
    consoleDiv.innerText = data.output || ">> Ejecución finalizada sin salida.";

    // 2. Símbolos
    const symbolsBody = document.querySelector("#symbols-table tbody");
    symbolsBody.innerHTML = "";
    data.simbolos.forEach((s) => {
      symbolsBody.innerHTML += `<tr>
                <td>${s.id}</td>
                <td><span style="color: #4ec9b0">${s.tipo}</span></td>
                <td>${s.ambito}</td>
                <td>${s.valor}</td>
                <td>${s.linea}:${s.columna}</td>
            </tr>`;
    });

    // 3. Errores
    const errorsBody = document.querySelector("#errors-table tbody");
    errorsBody.innerHTML = "";
    if (data.errores.length > 0) {
      data.errores.forEach((e) => {
        let cssClass = "error-sem";
        if (e.tipo.includes("Léxico")) cssClass = "error-lex";
        if (e.tipo.includes("Sintáctico")) cssClass = "error-syn";

        errorsBody.innerHTML += `<tr class="${cssClass}">
                    <td>${e.tipo}</td>
                    <td>${e.desc}</td>
                    <td>${e.linea}</td>
                    <td>${e.col}</td>
                </tr>`;
      });
      switchTab("errors");
    } else {
      switchTab("console");
    }

    // 4. AST
    const formattedAst = data.ast
      ? data.ast.replace(/\(/g, "\n(")
      : "// No AST available";
    astView.innerText = formattedAst;
  } catch (error) {
    consoleDiv.innerText = "Error: " + error;
  } finally {
    btnRun.disabled = false;
    btnRun.innerText = "▶ EJECUTAR";
  }
}

// --- FUNCIÓN DE DESCARGA ---
function descargar(tipo) {
  if (!lastResponse) {
    alert("Primero debes ejecutar un programa.");
    return;
  }

  let contenido = "";
  let nombreArchivo = "reporte";
  let extension = "txt";

  if (tipo === "console") {
    contenido = lastResponse.output;
    nombreArchivo = "consola_salida";
  } else if (tipo === "ast") {
    contenido = lastResponse.ast;
    nombreArchivo = "ast_tree";
  } else if (tipo === "symbols") {
    contenido = "ID,Tipo,Ambito,Valor,Linea,Columna\n"; // Cabecera CSV
    lastResponse.simbolos.forEach((s) => {
      // Escapar comas en los valores para no romper el CSV
      const val = String(s.valor).replace(/,/g, " ");
      contenido += `${s.id},${s.tipo},${s.ambito},${val},${s.linea},${s.columna}\n`;
    });
    nombreArchivo = "tabla_simbolos";
    extension = "csv";
  } else if (tipo === "errors") {
    contenido = "Tipo,Descripcion,Linea,Columna\n";
    lastResponse.errores.forEach((e) => {
      const desc = e.desc.replace(/,/g, " ");
      contenido += `${e.tipo},${desc},${e.linea},${e.col}\n`;
    });
    nombreArchivo = "reporte_errores";
    extension = "csv";
  }

  // Crear Blob y link de descarga
  const blob = new Blob([contenido], { type: "text/plain" });
  const url = window.URL.createObjectURL(blob);
  const a = document.createElement("a");
  a.href = url;
  a.download = `${nombreArchivo}.${extension}`;
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
  window.URL.revokeObjectURL(url);
}

function switchTab(tabName) {
  document
    .querySelectorAll(".tab")
    .forEach((t) => t.classList.remove("active"));
  document
    .querySelectorAll(".tab-content")
    .forEach((c) => c.classList.remove("active"));

  document.getElementById("btn-" + tabName).classList.add("active");
  document.getElementById("tab-" + tabName).classList.add("active");
}

function limpiar() {
  editor.setValue("func main() {\n    \n}");
  document.getElementById("console").innerText = "// Listo";
  document.getElementById("ast-view").innerText = "";
  document.querySelector("#symbols-table tbody").innerHTML = "";
  document.querySelector("#errors-table tbody").innerHTML = "";
  lastResponse = null;
  switchTab("console");
}
