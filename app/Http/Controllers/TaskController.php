<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */

    public function index(Request $request)
    {
        $displayTasks = Task::orderBy('created_at','ASC')->get();
        return view('tasks.index',compact('displayTasks'));
    }

    public function createTask(TaskRequest $request)
    {
        $task = new Task;
        $task->name = $request->name;
        $task->save();
        return redirect(route('tasks'))->with('success',trans('home.create_success'));
    }

    public function deleteTask($id)
    {
        try {
            $task = Task::findOrFail($id);
            $task->delete();
            return redirect()->route('tasks')->with('msgDelete',trans('home.delete_success'));
        } catch (Exception $exception) {
            return redirect()->route('tasks')->with('msgDelete',trans('home.delete_failed'));
        }
    }

}
