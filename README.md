# UPSS-Wireless

# Instrucciones para importar una base de datos en phpMyAdmin

1. Accede a phpMyAdmin en tu servidor web (Xampp, Mamp, o programas similares).
2. Crea la base de datos en la que deseas importar los datos.
3. Haz clic en la pestaña "Importar".
4. Selecciona el archivo de la base de datos que se encuentra en la ruta admin/sql/upss.sql.
5. Asegúrate de que la codificación de caracteres y el formato de archivo sean los adecuados.
6. Si deseas sobrescribir los datos existentes, marca la casilla "Eliminar datos existentes".
7. Haz clic en "Continuar" para iniciar la importación. 
8. Verifica que los datos se hayan importado correctamente y sin errores.

# Conectar la base de datos con los archivos del proyecto

1. Dirigete al archivo includes/conexion.php.
2. Modifica la linea de codigo '$conexion = new mysqli("localhost", "root", "", "upss");' con las credenciales adecuadas (usuario, contraseña, nombre de la base de datos, etc.).
3. Guarda los cambios.
4. Abre la ruta del localhost en tu navegador web.
5. Abre la carpeta llamada UPSS-Wireless.
6. Si no sucedieron errores, el proyecto deberia estar ejecuntadose de manera correcta.
