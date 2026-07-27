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
