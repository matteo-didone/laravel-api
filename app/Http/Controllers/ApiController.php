<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class ApiController extends Controller
{
    public function index()
    {
        $dati = Project::all();

        return response()->json(
            $dati
        );
    }

    public function getProjects()
    {
        $projects = Project::all();
        return response()->json($projects);
    }

}