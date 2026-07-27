<x-templates.app-layout title="Listado de Proyectos">
    <x-molecules.uf-card :valor="$valorUF" />
    <h2>Listado General de Proyectos</h2>
    <x-organisms.project-table :proyectos="$proyectos" />
</x-templates.app-layout>