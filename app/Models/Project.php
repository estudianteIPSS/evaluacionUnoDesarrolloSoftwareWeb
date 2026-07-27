<?php

namespace App\Models;

class Project
{
    private static $proyectos = [
        [
            'id' => 1,
            'nombre' => 'Modernización de Plataforma Web',
            'fecha_inicio' => '2026-03-01',
            'estado' => 'En Progreso',
            'responsable' => 'Ana Martínez',
            'monto' => 15000000
        ],
        [
            'id' => 2,
            'nombre' => 'Migración a la Nube AWS',
            'fecha_inicio' => '2026-04-15',
            'estado' => 'Planificación',
            'responsable' => 'Carlos Gómez',
            'monto' => 8500000
        ],
        [
            'id' => 3,
            'nombre' => 'Implementación Sistema ERP',
            'fecha_inicio' => '2026-01-10',
            'estado' => 'Finalizado',
            'responsable' => 'Sofía Rojas',
            'monto' => 22000000
        ]
    ];

    public static function all()
    {
        return self::$proyectos;
    }

    public static function find($id)
    {
        foreach (self::$proyectos as $proyecto) {
            if ($proyecto['id'] == $id) {
                return $proyecto;
            }
        }
        return null;
    }
}
