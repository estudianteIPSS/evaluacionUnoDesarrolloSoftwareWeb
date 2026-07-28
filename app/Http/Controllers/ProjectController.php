<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Services\UFService;

class ProjectController extends Controller
{
    public function index()
    {
        $proyectos = Project::all();
        $valorUF = UFService::obtenerUF();
        return view('projects.index', compact('proyectos', 'valorUF'));
    }

    public function show(Request $request, $id = null)
    {
        $searchId = $id ?? $request->input('id');
        $proyecto = $searchId ? Project::find($searchId) : null;
        return view('projects.show', compact('proyecto', 'searchId'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'       => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'responsable'  => 'nullable|string|max:255',
            'monto'        => 'nullable|numeric',
            'estado'       => 'nullable|string',
        ]);

        Project::create([
            'nombre'       => $validated['nombre'],
            'fecha_inicio' => $validated['fecha_inicio'],
            'responsable'  => $validated['responsable'] ?? 'Sin Asignar',
            'monto'        => $validated['monto'] ?? 0,
            'estado'       => $validated['estado'] ?? 'En Progreso',
        ]);

        // Corregido a projects.index
        return redirect()->route('projects.index')
                         ->with('success', '¡Proyecto creado con éxito!');
    }

    public function edit($id)
    {
        $proyecto = Project::findOrFail($id);
        return view('projects.edit', compact('proyecto'));
    }

    public function update(Request $request, $id)
    {
        $proyecto = Project::findOrFail($id);

        $validated = $request->validate([
            'nombre'       => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'responsable'  => 'nullable|string|max:255',
            'monto'        => 'nullable|numeric',
            'estado'       => 'nullable|string',
        ]);

        // Actualizar en SQLite
        $proyecto->update([
            'nombre'       => $validated['nombre'],
            'fecha_inicio' => $validated['fecha_inicio'],
            'responsable'  => $validated['responsable'] ?? 'Sin Asignar',
            'monto'        => $validated['monto'] ?? 0,
            'estado'       => $validated['estado'] ?? 'En Progreso',
        ]);

        return redirect()->route('projects.index')
                         ->with('success', "Proyecto #{$id} actualizado con éxito.");
    }

    public function destroyView()
    {
        return view('projects.delete');
    }

    public function destroy(Request $request, $id = null)
    {
        $targetId = $id ?? $request->input('id');

        if ($targetId) {
            $proyecto = Project::find($targetId);
            if ($proyecto) {
                $proyecto->delete(); // Elimina efectivamente de SQLite
            }
        }

        return redirect()->route('projects.index')
                         ->with('success', "Proyecto #{$targetId} eliminado con éxito.");
    }
}