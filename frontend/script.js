async function compilar() {
  const codigo = document.getElementById("code").value;
  const consoleDiv = document.getElementById("console");

  consoleDiv.innerText = "Compilando...";

  try {
    // Hacemos fetch a la raíz (../compile.php)
    const response = await fetch("../compile.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ codigo: codigo }),
    });

    if (!response.ok) throw new Error("Error en el servidor");

    const data = await response.json();

    // 1. Consola
    consoleDiv.innerText = data.output || ">> Ejecución finalizada sin salida.";

    // 2. Tabla de Símbolos
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

    // 3. Tabla de Errores
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
      switchTab("errors"); // Cambiar pestaña automáticamente si hay error
    } else {
      switchTab("console");
    }
  } catch (error) {
    consoleDiv.innerText =
      "Error de conexión: " +
      error +
      "\n Asegúrate de correr 'php -S localhost:8000' en la carpeta raíz.";
  }
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
  document.getElementById("code").value = "";
  document.getElementById("console").innerText = "";
  document.querySelector("#symbols-table tbody").innerHTML = "";
  document.querySelector("#errors-table tbody").innerHTML = "";
}
