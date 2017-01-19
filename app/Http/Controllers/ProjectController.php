<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\Projects\ProjectStore;
use App\Http\Requests\Projects\ProjectUpdate;

class ProjectController extends Controller
{

    /**
     *
     */
    public function index()
    {
        $projects = Project::all();

        return view('project.index', [
            'projects' => $projects,
        ]);
    }

    /**
     * this shows the create project form
     */
    public function create($client_id = null)
    {
        $clients = Client::orderBy('name')->get();

        return view('project.create', [
            'client_id' => $client_id,
            'clients' => $clients
        ]);
    }

    /**
     * this will store the project itself
     */
    public function store(ProjectStore $request)
    {
        $project = Project::create([
            'client_id' => $request->input('client_id'),
            'name' => $request->input('name'),
            'notes' => $request->input('notes'),
            'url' => $request->input('url'),
        ]);

        return redirect()->route('project')->with('success', ['The project has been created successfully.']);
    }

    public function edit(\App\Models\Project $project)
    {
        // refactor
        $clients = Client::orderBy('name')->get();

        return view('project.edit', compact('project', 'clients'));
    }

    public function update(ProjectUpdate $request, \App\Models\Project $project)
    {
        $project->client_id = $request->input('client_id');
        $project->name = $request->input('name');
        $project->notes = $request->input('notes');
        $project->url = $request->input('url');

        $project->save();

        return redirect()->route('project')->with('success', ['The project has been successfully update.']);
    }

    /**
     * removes project from system
     */
    public function destroy(\App\Models\Project $project)
    {
        // @todo on delete, remove any invoices for this project
        $project->delete();

        return redirect()->route('project')->with('success', ['The project was removed from the system.']);
    }

}
