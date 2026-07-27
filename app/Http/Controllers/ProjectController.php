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
        return redirect()->route('projects.index')->with('success', 'Proyecto creado con éxito.');
    }

    public function edit($id)
    {
        $proyecto = Project::find($id);
        return view('projects.edit', compact('proyecto', 'id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('projects.index')->with('success', "Proyecto #{$id} actualizado con éxito.");
    }

    public function destroyView()
    {
        return view('projects.delete');
    }

    public function destroy(Request $request, $id = null)
    {
        $targetId = $id ?? $request->input('id');
        return redirect()->route('projects.index')->with('success', "Proyecto #{$targetId} eliminado con éxito.");
    }
}
