<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task', compact('tasks'));
    }

    public function create()
    {
        return view('taskForm');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Task::create($validatedData); 

        return redirect()->route('tasks.index')->with('success', 'Task successfully added.');
    }

    public function show($id)
    {
        $fetchedRecord = Task::findOrFail($id);
        return view('taskShow', compact('fetchedRecord'));
    }

    public function edit($id)
    {
        $fetchedRecord = Task::findOrFail($id);
        return view('taskForm', compact('fetchedRecord'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task = Task::findOrFail($id);
        $task->update($validatedData); // Update the task

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}