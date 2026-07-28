<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Limpiar los registros actuales
        Project::truncate();

        // 2. Insertar los 3 proyectos base
        Project::create([
            'nombre'       => 'Sistema de Gestión Académica',
            'fecha_inicio' => '2026-03-15',
            'responsable'  => 'Carlos Mendoza',
            'monto'        => 1500000,
            'estado'       => 'En Progreso',
        ]);

        Project::create([
            'nombre'       => 'Rediseño Portal Web Institucional',
            'fecha_inicio' => '2026-04-01',
            'responsable'  => 'Ana Gómez',
            'monto'        => 850000,
            'estado'       => 'Planificación',
        ]);

        Project::create([
            'nombre'       => 'Migración de Servidores a Cloud',
            'fecha_inicio' => '2026-01-10',
            'responsable'  => 'Eduardo Silva',
            'monto'        => 2300000,
            'estado'       => 'Completado',
        ]);
    }
}