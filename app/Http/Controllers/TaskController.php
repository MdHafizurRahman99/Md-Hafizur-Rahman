<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("crud.list", [


            "tasks" => Task::all()
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("crud.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        if ($request->completed == 1) {
            Task::create([
                "title" => $request->title,
                "description" => $request->description,
                "completed" => $request->completed,
            ]);
        } else {
            Task::create([
                "title" => $request->title,
                "description" => $request->description,
                "completed" => 0,
            ]);
        }

        return view("dashboard");
        // $this->validate($request, [
        //     "title" => "required" | "string",
        //     "description" => "required" | "string",
        // ]);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
