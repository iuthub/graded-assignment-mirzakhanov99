<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Auth;

class TaskController extends Controller
{
    public function create(Request $request)
    {
    	$validate = $request->validate([
    		'newTask' => 'required',
    	]);

    	$task = new Task;
    	$task->newTask= $request->newTask;
    	$task->user_id = Auth::user()->id;
    	$task->save();

    	return redirect('/');
    }

    public function index()
    {
    	if(Auth::user()){
    		$tasks = Auth::user()->tasks;
    		return view('welcome', ['tasks' => $tasks]);
    	}

    	return view('welcome');
    }

    public function delete($id)
    {
    	Task::find($id)->delete();
    	return redirect('/');
    }
    public function update($id){
    	$task = Task::find($id);
    	return view('blog/edit', ['task'=> $task]);
    }
    public function edit(Request $request, $id)
    {
    	$validate = $request->validate([
    		'newTask' => 'required',
    	]);

    	$task = Task::find($id);
    	$task->update([
    		'newTask' => $request->newTask
    	]);
    	

    	return redirect('/');
    }
}
