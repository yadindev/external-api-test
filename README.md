# App simple para probar como llamar a una api externa desde laravel y utilizar testing basico con pest

Este es un proyecto muy simple donde utilizo laravel usando llamando apis externas y utilizacion de pest para testing

# Instalación

## Requisitos Previos

- PHP (versión [^8.0](https://www.php.net/downloads.php))
- Composer (https://getcomposer.org/download/)
- Servidor de Base de Datos (por ejemplo, MySQL, PostgreSQL)
- Git

## Pasos para la Instalación

1. Clona el repositorio en tu máquina local utilizando el siguiente comando en tu terminal o línea de comandos:

   ```
   git clone https://github.com/yadindev/external-api-test.git
   ```

2. Accede al directorio del proyecto:

   ```
   cd tu-proyecto-laravel
   ```

3. Instala las dependencias utilizando Composer:

   ```
   composer install
   ```

4. Crea un archivo `.env` basado en el archivo `.env.example`:

   - En Linux/Mac:

     ```
     cp .env.example .env
     ```

   - En Windows (PowerShell):

     ```
     copy .env.example .env
     ```

5. Genera una nueva clave de aplicación ejecutando el siguiente comando:

   ```
   php artisan key:generate
   ```


6. Inicia el servidor de desarrollo de Laravel:

   ```
   php artisan serve
   ```

10. Abre tu navegador y accede a `http://localhost:8000` para ver la aplicación en funcionamiento.

¡Listo! Ahora deberías tener el proyecto instalado y funcionando en tu máquina local.

Si tienes algún problema durante la instalación o tienes preguntas adicionales, consulta la documentación oficial de Laravel (https://laravel.com/docs) o ponte en contacto con [el desarrollador del proyecto.](https://github.com/yadindev) ¡Disfruta codificando! 😊🚀

