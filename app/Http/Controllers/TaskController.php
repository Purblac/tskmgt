<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard(Request $request)
    {
        $user = Auth::user();
        $task = Task::where('user_id', $user->id);
    
        if ($request->has('title')) {
            $task->where('task_title', 'LIKE', '%' . $request->input('title') . '%');
        }
    
        if ($request->has('description')) {
            $task->where('task_description', 'LIKE', '%' . $request->input('description') . '%');
        }
    
        if ($request->has('date_updated')) {
            $orderDirection = $request->input('date_updated') === 'asc' ? 'asc' : 'desc';
            $task->orderBy('updated_at', $orderDirection);
        }
    
        $task = $task->get();
    
        return view('TaskManagement.dashboard', compact('user', 'task'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('TaskManagement.create');
    }


    public function store(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'task_title' => ['required', 'string', 'max:255'],
            'task_description' => ['required', 'string'],
        ]);

        // Create a new task using the Task model
        $task = new Task();
        $task->user_id = auth()->id(); // Associate with the logged-in user
        $task->task_title = $validatedData['task_title'];
        $task->task_description = $validatedData['task_description'];
        $task->save();

        // Redirect or respond as needed
        return redirect()->route('dashboard')->with('success', 'Task created successfully');
    }
    public function edit($id)
    {
        $task = Task::findOrFail($id);

        // Check if the user is authorized to edit this task
        if ($task->user_id !== auth()->id()) {
            return redirect()->route('dashboard')->with('error', 'You are not authorized to edit this task');
        }

        return view('TaskManagement.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        // Check if the user is authorized to edit this task
        if ($task->user_id !== auth()->id()) {
            return redirect()->route('dashboard')->with('error', 'You are not authorized to edit this task');
        }

        // Validate the incoming data
        $validatedData = $request->validate([
            'task_title' => ['required', 'string', 'max:255'],
            'task_description' => ['required', 'string'],
        ]);

        // Update the task attributes
        $task->task_title = $validatedData['task_title'];
        $task->task_description = $validatedData['task_description'];
        $task->save();

        // Redirect or respond as needed
        return redirect()->route('dashboard')->with('success', 'Task updated successfully');
    }
    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        // Check if the user is authorized to delete this task
        if ($task->user_id !== auth()->id()) {
            return redirect()->route('dashboard')->with('error', 'You are not authorized to delete this task');
        }

        $task->delete();

        // Redirect or respond as needed
        return redirect()->route('dashboard')->with('success', 'Task deleted successfully');
    }
    
   
}
