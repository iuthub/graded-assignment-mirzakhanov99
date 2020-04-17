@extends('layouts.master')
@section('content')
 @if(Auth::user())
<form action="/create" method="POST">
  @csrf
  <div id="myDIV" class="header">
      <h2>My To Do List</h2>
      <input type="text" name="newTask" placeholder="Title...">
      <button type="submit" class="addBtn">Add</button>
  </div>
</form>
  <ul id="myUL">
    @foreach($tasks as $task)
    <li>
      <div class="task">
          {{ $task->newTask }}
      </div>
      <div class="action">
          <a href="/blog/edit/{{$task->id}}"><i class="fa fa-edit"></i></a>
      </div>
      <div class="action">
          <a href="/task/delete/{{$task->id}}"><i class="fa fa-trash-alt"></i></a> 
      </div>
    </li>
    @endforeach
  </ul>
  @endif
@endsection