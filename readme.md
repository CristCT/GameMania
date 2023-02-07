# GameMania
GameMania es un proyecto que consiste en una página web que permite registrar a los vendedores de una tienda de videojuegos y sus ventas, para luego consultarlas, editarlas o eliminarlas. El proyecto está hecho con un Sistema MVC usando PHP con una base de datos MySQL y uso de Sesiones.
## Herramientas para replicar el proyecto
* [XAMPP](https://www.apachefriends.org/es/index.html) - Servidor local
* [Visual Studio Code](https://code.visualstudio.com/) - Editor de código
* [MySQL Workbench](https://www.mysql.com/products/workbench/) - Editor de base de datos
## Configuración del proyecto
El procedimiento para el funcionamiento adecuado del proyecto consiste en clonar el repositorio o descargar el archivo comprimido, luego descomprimirlo y copiarlo en la ruta ```C:\xampp\htdocs``` donde se crea una carpeta llamada ```GameMania```, dentro de ella clonar el repositorio o descomprimir el archivo. Debe quedarle una ruta similar a la siguiente ```C:\xampp\htdocs\GameMania```
### Configuración de la Base de Datos y del Servidor
Para la configuración de la base de datos, se debe abrir el archivo ```config.php``` que se encuentra en la ruta ```C:\xampp\htdocs\GameMania\config\config.php``` y modificar los valores de ```host```, ```user```, ```pass``` y ```db``` para que coincidan con los valores de su base de datos, en este caso se debe crear una base de datos llamada ```vendedores```, se puede usar el archivo ```vendedores.sql``` que se encuentra en la ruta ```C:\xampp\htdocs\GameMania\config\vendedores.sql``` para crear las tablas y los registros de prueba.

Ruta de acceso: ```http://localhost/GameMania/```
Asegurarse de tener activado el servidor Apache y MySQL en XAMPP.
### Consideraciones
Al ingresar en la pagina se encontrará con una pantalla donde habrá información sobre GameMania e imágenes de juegos, puede pulsar "Iniciar Sesión", esta le cargará una pagina para iniciar sesión en la cual se puede ingresar con un usuario ```admin``` y contraseña ```admin```.
## Autor
* *Cristian Cuevas Tapia* - *Desarrollador* - [CristCT](