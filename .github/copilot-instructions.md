# Copilot Instructions for AI Coding Agents

## Arquitectura y Componentes Clave
- Este proyecto es una aplicación web basada en Laravel (PHP), ubicada en `c:\xampp\htdocs\movilidad`.
- Estructura principal:
  - `app/`: Lógica de negocio, modelos (`Models/`), controladores (`Http/Controllers/`), middleware y servicios.
  - `routes/`: Archivos de rutas (`web.php`, `api.php`, etc.) que definen los endpoints y flujos de navegación.
  - `resources/views/`: Vistas Blade para la interfaz de usuario, organizadas por año y sección.
  - `database/`: Migraciones, seeders y factories para la gestión de datos.
  - `public/`: Archivos estáticos (CSS, JS, imágenes) y punto de entrada (`index.php`).
  - `config/`: Configuración de la aplicación y servicios externos.

## Flujos de Desarrollo
- **Compilación y Servidor Local:**
  - Usar `php artisan serve` para iniciar el servidor de desarrollo.
  - Compilar assets front-end con `npm run dev` o `npm run prod` (ver `webpack.mix.js`).
- **Pruebas:**
  - Ejecutar pruebas con `php artisan test` o `vendor/bin/phpunit`.
  - Los tests se ubican en `tests/Feature/` y `tests/Unit/`.
- **Migraciones y Seeders:**
  - Migrar base de datos: `php artisan migrate`.
  - Poblar datos: `php artisan db:seed`.

## Convenciones Específicas
- Las vistas Blade están organizadas por año (`resources/views/{año}/`) y sección, facilitando la navegación histórica.
- Los controladores suelen agrupar lógica por dominio en subcarpetas dentro de `app/Http/Controllers/`.
- Los modelos representan entidades clave y se ubican en `app/Models/`.
- Las rutas personalizadas pueden encontrarse en archivos adicionales dentro de `routes/` (ej: `atencion.php`, `entidad.php`).
- Los estilos y scripts personalizados se ubican en `resources/css/` y `resources/js/`.

## Integraciones y Dependencias
- El proyecto depende de paquetes PHP gestionados por Composer (`composer.json`, `vendor/`).
- El front-end utiliza Node.js y NPM para la gestión de assets (`package.json`).
- Configuración de servicios externos (bases de datos, correo, etc.) en `config/`.

## Ejemplo de Flujo de Trabajo
1. Crear un controlador: `php artisan make:controller NombreControlador`
2. Definir rutas en `routes/web.php` o archivos personalizados.
3. Crear vistas en `resources/views/`.
4. Ejecutar migraciones y seeders si se requiere persistencia.
5. Probar con `php artisan test`.

## Recomendaciones para Agentes AI
- Priorizar la organización por año y sección en vistas y rutas.
- Mantener la coherencia en la nomenclatura de controladores y modelos.
- Validar cambios en assets con los comandos de NPM y verificar la compilación.
- Consultar archivos de configuración antes de integrar servicios externos.

---
¿Faltan convenciones, flujos o integraciones relevantes? Indica detalles específicos para mejorar estas instrucciones.