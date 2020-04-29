@extends('layouts.master')
@section('content')
<form action="/task/edit/{{$task->id}}" method="POST">
  @csrf
  <div id="myDIV" class="header">
      <h2>My To Do List</h2>
      <input value="{{$task->newTask}}" type="text" name="newTask" placeholder="Title...">
      <button type="submit" class="addBtn">Edit</button>
  </div>
</form>
@endsection