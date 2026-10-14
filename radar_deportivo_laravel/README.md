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

Si `php` no se reconoce, añade la carpeta de PHP al PATH de Windows y abre otra terminal.

## Subir a GitHub
Crea un repositorio y sube el contenido de esta carpeta. No subas `.env` ni `vendor/`. Con Git:
```bash
git init
git add .
git commit -m "Proyecto Radar Deportivo Laravel"
git branch -M main
git remote add origin https://github.com/TU-USUARIO/radar-deportivo-laravel.git
git push -u origin main
```
GitHub almacena el código, pero GitHub Pages no ejecuta PHP/Laravel. Para que la web sea pública necesitas un hosting compatible con PHP/Laravel.

## Estructura
- `routes/web.php`: ruta principal.
- `app/Http/Controllers/HomeController.php`: controlador.
- `resources/views/home.blade.php`: vista Blade.
- `public/css/styles.css`: estilos.
- `public/js/script.js`: comportamiento frontend.

## Nota
Las noticias son de ejemplo con enlaces a secciones oficiales de Red Bull; no hay API de noticias. Favoritos y propuestas se guardan en `localStorage`, no en la base de datos. El sitio es independiente y no está afiliado a Red Bull GmbH.
