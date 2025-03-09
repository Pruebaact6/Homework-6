🚀 Activity 7 - Robotics Course Management System

📌 Project Name

Robotics Course Management System

📖 Project Description

Este proyecto es un sistema de gestión de cursos de robótica que permite administrar usuarios con distintos roles, asignarlos a grupos y facilitar su inscripción en cursos.

🔹 Usuarios con roles como Administrador, Profesor y Estudiante.🔹 Grupos de estudiantes asignados a diferentes cursos.🔹 Cursos vinculados a kits de robótica para su desarrollo.🔹 Kits de robótica usados en la enseñanza de cada curso.

📊 Entity-Relationship Diagram (ERD)

A continuación, se muestra el diagrama de relaciones de la base de datos del proyecto:

![ER Diagram](C:\Users\Marlon\Downloads\Diagrama_en_blanco.jpeg)

Nota: Asegúrate de colocar la imagen en la carpeta docs o actualizar la ruta según donde la guardes.

🛠️ Setup & Installation

# Clona el repositorio
git clone https://github.com/tu-usuario/tu-repositorio.git

# Instala las dependencias
composer install

# Configura el archivo .env
cp .env.example .env
php artisan key:generate

# Ejecuta las migraciones y seeders
php artisan migrate --seed

# Inicia el servidor
php artisan serve

✨ Autor

[Tu Nombre] - Desarrollador del sistema de gestión de cursos de robótica. 🚀

