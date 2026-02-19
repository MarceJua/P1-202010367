# P1-202010367

# Manual de Usuario

## 1. Instalación y Ejecución

### Requisitos Previos

- Tener instalado **PHP 8.2** o superior.
- Tener instalado **Composer** (Gestor de dependencias).
- Navegador Web (Chrome, Firefox, Edge).

### Pasos paso a paso

1. **Clonar el proyecto:** Clone el repositorio ejecutanto en terminal: `git clone https://github.com/MarceJua/P1-202010367.git`
2. **Instalar dependencias:** Abra una terminal en la carpeta raíz y ejecute:

   `composer install`

3. **Generar el Compilador:** Para asegurarse de que la gramática esté actualizada, ejecute:

   `composer compile`

4. **Iniciar el Servidor:** Ejecute el siguiente comando para levantar la interfaz web:

   `php -S localhost:8000`

5. **Abrir en el Navegador:** Ingrese a la siguiente dirección:
   `http://localhost:8000/frontend/`

## 2. Guía de Uso de la Interfaz

### Área de Trabajo

- **Editor de Código (Izquierda):** Aquí es donde escribirá su código Golampi. El editor cuenta con resaltado de sintaxis, números de línea y cierre automático de paréntesis para facilitar la escritura.
- **Barra de Herramientas (Superior):**
  - Botón **`▶ EJECUTAR`**: Envía el código al servidor para ser compilado e interpretado.
  - Botón **`Limpiar`**: Borra el código actual y reinicia los reportes.

### Interpretación de Reportes (Derecha)

El panel de resultados cuenta con tres pestañas:

1. **Terminal:** Muestra la salida estándar del programa (lo que imprime `fmt.Println`). Aquí verá los resultados de sus algoritmos.
2. **Tabla de Símbolos:**
   - Muestra todas las variables, constantes y funciones declaradas.
   - **Columnas:**
     - `ID`: Nombre de la variable.
     - `Tipo`: Tipo de dato (int, string, bool, array, puntero).
     - `Ámbito`: Dónde fue creada (Global, main, función X).
     - `Valor`: El valor inicial o actual.
     - `Pos`: Línea y columna de declaración.
3. **Reporte de Errores:**
   - Si su código tiene fallos, esta pestaña se activará automáticamente.
   - Clasifica los errores por colores:
     - 🟠 **Sintáctico/Léxico:** Errores de escritura o símbolos desconocidos.
     - 🔴 **Semántico:** Errores de lógica (variables no definidas, tipos incompatibles).

## 3. Ejemplo de Sesión

1. **Captura 1 (Código Exitoso):**

_Ejecución exitosa de un programa básico._

2. **Captura 2 (Tabla de Símbolos):**

_Visualización de las variables almacenadas en memoria._

1. **Captura 3 (Reporte de Errores):**

_Detección y reporte de errores semánticos._
