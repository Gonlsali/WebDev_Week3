<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects', [
            'pagetitle' => 'Projects',
            'maintitle' => 'My Projects',
            'projects' => Project::allData()
        ]);
    }

    public function show($code)
    {
        return view('showproject', [
            'pagetitle' => 'Project',
            'maintitle' => 'Project Detail',
            'project' => Project::dataWithCode($code)
        ]);
    }
}
