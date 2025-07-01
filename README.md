# Prueba Técnica - Backend Granada

Este proyecto es una prueba técnica desarrollada en Laravel. El objetivo principal fue implementar una API backend siguiendo los requerimientos establecidos, realizando algunos cambios respecto a la propuesta original, como el uso de MySQL en lugar de PostgreSQL como base de datos.

## Cambios realizados

- **Base de datos:**  
  La implementación original sugería el uso de PostgreSQL, pero en este proyecto se utilizó **MySQL** para la gestión de datos.  
  Puedes configurar la conexión en el archivo `.env`:

  
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=nombre_de_tu_base
  DB_USERNAME=usuario
  DB_PASSWORD=contraseña
  

- **Migraciones y modelos:**  
  Se crearon las migraciones y modelos necesarios para la gestión de usuarios y logs, siguiendo las buenas prácticas de Laravel.

## Requisitos

- PHP >= 8.1
- Composer
- MySQL

## Instalación

1. Clona el repositorio:
   
   git clone https://github.com/cranriar/BackGranada.git
   cd BackGranada
   

2. Instala las dependencias de PHP:
   
   composer install
   

3. Copia el archivo de entorno y configura tus variables:
   
   cp .env.example .env
   # Edita .env para tus credenciales de MySQL
   

4. Genera la clave de la aplicación:
   
   php artisan key:generate
   

5. Ejecuta las migraciones:
   
   php artisan migrate
   

6. (Opcional) Instala dependencias de frontend:
   
   npm install && npm run build
   

7. Inicia el servidor de desarrollo:
   
   php artisan serve


## Notas

- El proyecto utiliza MySQL como base de datos principal.
- Se recomienda revisar y ajustar las variables de entorno según tu entorno local.

---

Desarrollado como parte de una prueba técnica.