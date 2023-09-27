# **Blog con PHP & LARAVEL**

En este proyecto, he desarrollado un sistema de blog correctamente estructurado utilizando Laravel y PHP. A continuación, se describen los conceptos clave de Laravel que se utilizan:

- **Models**
- **Base de datos**
- **Rutas**
- **Controladores**
- **Vistas**

## **Requisitos**

Asegúrate de tener instalado lo siguiente en tu sistema antes de comenzar:

- [**XAMPP**](https://www.apachefriends.org/index.html) para la gestión de la base de datos MySQL.
- [**Composer**](https://getcomposer.org/) para la gestión de las dependencias de Laravel.
- [**Git**](https://git-scm.com/) (opcional) para el control de versiones.

## **Configuración**

### **Pasos de Configuración:**

1. Clona este repositorio en tu sistema (si aún no lo has hecho):
   
    ```
    git clone https://github.com/juanmarobles/laravelblog.git
    ```

2. Navega hasta el directorio del proyecto:
   
    ```
    cd laravelblog
    ```

3. Instala las dependencias de Composer:
   
    ```
    composer install
    ```

4. Configura el archivo `.env` para tu base de datos.
   ```
    por defecto tiene "basicnew" como nombre de la bd.
    ```

6. Genera una clave de cifrado única para tu aplicación:
   
    ```
    php artisan key:generate
    ```

7. Ejecuta las migraciones para crear las tablas en la base de datos:
   
    ```
    php artisan migrate
    ```

8. Inicia el servidor de desarrollo de Laravel:
   
    ```
    php artisan serve
    ```
## **Este proyecto de blog incluye las siguientes funcionalidades:**

### **BLOG**

Registro y inicio de sesión de usuarios.
Creación y gestión de publicaciones de blog, incluyendo imágenes.
CRUD completo para las publicaciones, lo que permite crear, leer, actualizar y eliminar entradas de blog.
Tecnologías Utilizadas

## **Tecnologías Utilizadas**

- **Laravel**: Framework de PHP para el desarrollo web.
- **MySQL**: Sistema de gestión de bases de datos.
- **XAMPP**: Herramienta que proporciona un servidor web Apache y un servidor de base de datos MySQL.

## **Licencia**

Este proyecto está bajo la licencia de Juan Manuel Robles. Todos los derechos reservados.
