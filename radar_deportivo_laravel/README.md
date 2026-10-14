# Radar Deportivo en Laravel

## Requisitos
- PHP 8.2 o superior
- Composer 2
- Windows: Laragon o XAMPP puede facilitar PHP; Composer debe estar instalado.
- No necesita Node.js ni npm en esta versión.

## Instalar y ejecutar en Windows
1. Instala PHP 8.2+ y Composer desde https://getcomposer.org/download/ (o instala Laragon y configura Composer).
2. Abre CMD y comprueba `php -v` y `composer -V`.
3. Descomprime el ZIP y entra a la carpeta del proyecto: `cd ruta\\radar_deportivo_laravel`
4. Ejecuta `composer install`.
5. Copia la configuración: `copy .env.example .env`
6. Genera la clave: `php artisan key:generate`
7. Crea el archivo SQLite si no existe: `type nul > database\\database.sqlite`
8. Ejecuta `php artisan serve`.
9. Abre http://127.0.0.1:8000.
