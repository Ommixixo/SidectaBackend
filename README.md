# SIDECTA API

Servicios para funciones de CRUD para Mapa interactivo desarrollado en Laravel

## Requisitos

- PHP >= 8.0
- Composer
- PostgreSQL

## Configuración

## Inicio Rápido

1. Clona este repositorio:
   ```javascript
   git clone https://github.com/Ommixixo/SidectaFronted.git
   cd proyecto-name

2. Instala las Dependencias
   ```javascript
   php artisan install

3. Configura el Entorno
Copia el archivo .env.example y renómbralo a .env. Luego, configura las variables de entorno, especialmente la conexión a la base de datos:
   ```javascript
   cp .env.example .env


4. Genera la Clave de la Aplicación
   ```javascript
   php artisan key:generate

5. Configura la Base de Datos
Edita el archivo .env y configura las variables relacionadas con la conexión a la base de datos (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD) siendo las comunmente usadas en postgres

    ```javascript
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE='nombre-de-base-de-datos'
    DB_USERNAME='nombre-de-usuario'
    DB_PASSWORD='contraseña'


6. Ejecuta las Migraciones
    ```javascript
    php artisan migrate --seed

7. Inicia el Servidor
    ```javascript
    php artisan serve

El servidor se ejecutará en http://localhost:8000 por defecto.

Verificación de Rutas
Para verificar las rutas disponibles, ejecuta el siguiente comando:
    ```javascript
    php artisan route:list

Esto mostrará una lista de rutas registradas en tu aplicación.

Licencia
Este proyecto está bajo la Licencia MIT - consulta el archivo LICENSE para más detalles.