<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Auth::user()->tasks;
        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required|date',
            'status' => 'required|string',
            'prioritization' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'duration' => 'required|string',
        ]);

        $task = Auth::user()->tasks()->create($request->all());

        return response()->json(['message' => 'Task created successfully!'], 200);
    }

    public function show($id)
    {
        $task = Auth::user()->tasks()->findOrFail($id);
        return response()->json($task);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'sometimes|required|date',
            'status' => 'sometimes|required|string',
            'prioritization' => 'sometimes|required|string',
            'category_id' => 'sometimes|required|exists:categories,id',
            'duration' => 'sometimes|required|string',
        ]);

        $task = Auth::user()->tasks()->findOrFail($id);
        $task->update($request->all());

        return response()->json(['message' => 'Task updated successfully!'], 200);
    }

    public function destroy($id)
{
    $task = Auth::user()->tasks()->findOrFail($id);
    $task->delete();

    return response()->json(['message' => 'Task deleted successfully!'], 200);
}

}


