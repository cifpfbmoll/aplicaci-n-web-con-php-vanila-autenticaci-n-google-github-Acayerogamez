Implementación de Autenticación de Google con PHP (OAuth 2.0)
Este proyecto es una aplicación web desarrollada en PHP que implementa un sistema de inicio de sesión seguro utilizando el protocolo OAuth 2.0 de Google. Permite a los usuarios autenticarse con sus cuentas de Google existentes, obteniendo su información básica de perfil de forma segura.
✨ Características Principales
Flujo Completo de OAuth 2.0: Implementación del ciclo completo de autorización, desde la redirección a Google hasta la gestión del token de acceso.
Gestión de Sesiones: Uso de sesiones de PHP ($_SESSION) para mantener al usuario autenticado mientras navega por la aplicación.
Obtención de Datos del Perfil: Acceso a la información básica del usuario (nombre, email y foto de perfil) a través de la API de Google.
Cierre de Sesión Seguro: Funcionalidad para destruir la sesión y cerrar la sesión del usuario en la aplicación.
🎬 Video de Funcionamiento
A continuación se encuentra el enlace a un video que demuestra el ciclo completo de la aplicación: la página de inicio, el proceso de autorización con Google y la visualización final del perfil del usuario autenticado.
➡️ Haz clic aquí para ver el video de demostración en Google Drive
🚀 Tecnologías Utilizadas
PHP 8.2 (ejecutado sobre un servidor Apache a través de XAMPP)
Google Cloud Platform: Para la configuración del proyecto y la obtención de credenciales OAuth 2.0.
Google API Client for PHP: Librería oficial de Google para facilitar la comunicación con sus APIs.
Composer: Gestor de dependencias para PHP.
⚙️ Guía de Instalación y Puesta en Marcha
Para ejecutar este proyecto en un entorno local, sigue los siguientes pasos:
Requisitos Previos
Tener instalado un entorno de servidor local como XAMPP.
Tener instalado Composer, el gestor de dependencias de PHP.
Pasos de Configuración
Clonar el Repositorio
Clona este repositorio dentro de la carpeta htdocs de tu instalación de XAMPP.
code
Bash
cd C:\xampp\htdocs
git clone [URL_DE_TU_REPOSITORIO] google-auth-php
Instalar Dependencias
Navega a la carpeta del proyecto en una terminal e instala las librerías necesarias con Composer.
code
Bash
cd google-auth-php
composer install
Este comando leerá el fichero composer.json y descargará la librería de Google en una carpeta llamada vendor.
Configurar las Credenciales de Google Cloud
Ve a la Google Cloud Console y crea un nuevo proyecto.
Navega a APIs y servicios > Pantalla de consentimiento de OAuth, selecciona "Externo" y rellena la información requerida.
Ve a Credenciales > + CREAR CREDENCIALES > ID de cliente de OAuth.
Selecciona "Aplicación web" y añade el siguiente URI en "URI de redireccionamiento autorizados":
code
Code
http://localhost/google-auth-php/callback.php
Copia tu ID de cliente y tu Secreto del cliente.
Añadir las Credenciales al Código
Abre los siguientes ficheros y pega tus credenciales en las variables correspondientes:
login.php
callback.php
code
PHP
$clientID = 'TU_ID_DE_CLIENTE_AQUÍ';
$clientSecret = 'TU_SECTRETO_DEL_CLIENTE_AQUÍ';
Ejecutar la Aplicación
Abre el panel de control de XAMPP e inicia el servicio Apache.
Abre tu navegador web y ve a la siguiente dirección:
code
Code
http://localhost/google-auth-php/
¡Listo! Ahora puedes probar el flujo de autenticación.
