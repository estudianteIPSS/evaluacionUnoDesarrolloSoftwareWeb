# 🚀 Tech Solutions - Sistema de Gestión de Proyectos

[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)](LICENSE)

Este repositorio contiene el desarrollo del sistema modernizado de gestión de proyectos para la empresa **Tech Solutions**, desarrollado como parte de la **Evaluación Sumativa de la Unidad 1** de la asignatura **Desarrollo Software Web I** en el **Instituto Profesional San Sebastián**.

---

## 📌 Descripción del Proyecto

El proyecto consiste en un módulo web encargado de la administración de proyectos corporativos, desarrollado sobre **PHP / Laravel** bajo el patrón de diseño **MVC (Modelo-Vista-Controlador)** en el backend y aplicando la metodología **Atomic Design** en la capa de presentación mediante componentes reutilizables de **Blade**. Además, integra un servicio externo REST para la consulta en tiempo real de indicadores económicos (UF).

---

## 🛠️ Tecnologías y Metodologías Utilizadas

* **Lenguaje:** PHP 8.2+
* **Framework:** Laravel 10.x
* **Arquitectura:** MVC (Modelo - Vista - Controlador)
* **Diseño UI:** Atomic Design (Átomos, Moléculas, Organismos, Plantillas, Páginas)
* **Consumo de API:** HTTP Client de Laravel (Consumo de API externa de UF)
* **Plantillas:** Laravel Blade Components

---

## 📂 Arquitectura del Proyecto (Atomic Design)

La capa de presentación (`resources/views`) se encuentra organizada rigurosamente bajo los principios de **Atomic Design**:

```text
resources/views/
├── components/                  # Arquitectura Atomic Design
│   ├── atoms/                   # Elementos básicos (Botones, Títulos)
│   │   ├── button.blade.php
│   │   └── heading.blade.php
│   ├── molecules/               # Combinación de átomos (Tarjetas, Alertas)
│   │   ├── uf-card.blade.php    # Componente reutilizable del Servicio UF
│   │   └── alert.blade.php
│   ├── organisms/               # Módulos complejos (Tablas, Formularios)
│   │   ├── project-table.blade.php
│   │   └── navbar.blade.php
│   └── templates/               # Estructura base / Layouts
│       └── app-layout.blade.php
└── projects/                    # Páginas / Vistas finales
    ├── index.blade.php          # 1. Listar proyectos
    ├── create.blade.php         # 2. Agregar proyecto
    ├── show.blade.php           # 3. Obtener por ID
    ├── edit.blade.php           # 4. Actualizar por ID
    └── delete.blade.php         # 5. Eliminar por ID

```
---
## ⚙️ Guía de Instalación y Despliegue
Sigue estos pasos en la terminal para desplegar y ejecutar el proyecto localmente:

1. Clonar o descomprimir el repositorio
Abre una terminal en la carpeta raíz del proyecto.

2. Instalar dependencias de PHP
Ejecuta Composer para instalar las librerías necesarias (se generará la carpeta vendor):

```
Bash
composer install
```

3. Crear el archivo de entorno (.env)
Duplica la plantilla .env.example subida en el repositorio para generar tu archivo local .env:

En PowerShell / macOS / Linux:

```
Bash
cp .env.example .env
```

4. Generar la clave de la aplicación
Genera la clave única de encriptación requerida por el framework:

```
Bash
php artisan key:generate
```

5. Iniciar el servidor local
Levanta el servidor de desarrollo integrado de Laravel:

```
Bash
php artisan serve
```

🌐 Rutas de Navegación
Una vez iniciado el servidor (http://127.0.0.1:8000), puedes ingresar a las siguientes URLs en tu navegador:

Listado de Proyectos: http://127.0.0.1:8000/proyectos

Crear Proyecto: http://127.0.0.1:8000/proyectos/crear

🛡️ Resiliencia y Consumo de API Externa
El consumo de la API de indicadores económicos (mindicador.cl) a través del servicio UFService.php incorpora:

Timeout controlado (3s): Evita bloqueos en la carga de la vista si el servicio externo no responde inmediatamente.

Mecanismo de Fallback: En caso de fallo o timeout de la API externa, el sistema retorna un valor estimado por defecto garantizando la estabilidad continua de la aplicación durante la evaluación.




