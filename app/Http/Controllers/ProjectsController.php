<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Class_;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {

      $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }
    public function store()
    {
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project -> save();
         return redirect ('/projects');
    }
}

