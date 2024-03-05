Proyecto de Gestión de Personal para BSG Institute

Descripción:
Este proyecto, desarrollado para BSG Institute, es una aplicación web construida con el framework Laravel. Su objetivo principal es la gestión de personal, permitiendo realizar operaciones CRUD sobre registros de empleados, así como gestionar sus contactos, contratos, asignaciones de horarios, y vinculaciones con usuarios para propósitos de autenticación.

Características Principales:
- CRUD completo de empleados.
- Gestión de contactos, contratos y horarios asociados a cada empleado.
- Autenticación de usuarios.
- Interfaz de usuario intuitiva para la gestión de datos.
- Validación de datos en el lado del servidor.

Tecnologías Utilizadas:
- Backend: Laravel (Versión recomendada: 8.x)
- Base de Datos: MySQL
- Frontend: Blade/livewire, Bootstrap para diseño responsivo.

Requisitos Previos:
- PHP >= 7.3
- Composer para manejo de dependencias de PHP.
- Node.js y NPM (opcional, para manejo de dependencias front-end).
- Servidor MySQL o MariaDB.

Configuración Inicial:
1. Clonación del Repositorio:
   git clone [URL_DEL_REPOSITORIO]

2. Instalación de Dependencias:
   Desde el directorio del proyecto, ejecutar `composer install`. Si se utilizan dependencias front-end, ejecutar también `npm install`.

3. Configuración del Entorno:
   Copiar `.env.example` a `.env` y configurar las variables de entorno necesarias, especialmente las de conexión a la base de datos.

4. Generación de Clave de Aplicación:
   Ejecutar `php artisan key:generate` para generar la clave única de la aplicación.

5. Ejecución de Migraciones:
   Crear las tablas necesarias en la base de datos con `php artisan migrate`.

Ejecución del Proyecto:
Para iniciar el servidor de desarrollo, ejecutar `php artisan serve`. La aplicación estará disponible en `http://localhost:8000`.

Estructura del Proyecto:
- `/app/Models/`: Modelos Eloquent para interactuar con la base de datos.
- `/database/migrations/`: Migraciones para definir la estructura de la base de datos.
- `/routes/web.php`: Rutas de la aplicación.
- `/resources/views/`: Plantillas Blade para las vistas de la aplicación.
- `/app/Http/Controllers/`: Controladores que manejan la lógica de negocio.

Contribuciones:
Para contribuir al proyecto, por favor envía un pull request o abre un issue para discutir los cambios propuestos.
 