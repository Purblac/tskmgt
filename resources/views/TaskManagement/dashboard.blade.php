<!DOCTYPE html>
@extends('layout')

@section('taskappearance')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
   
</head>
<body>
    <!-- Sidebar -->
    
    <div class="sidebar shadow " >
        <p style="font-family: 'Brush Script MT', cursive; color: white; text-align: center;">TaskOrg</p>
        <a href="{{ route('dashboard') }}" class="dashboard-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
        <a href="{{ route('tools.content') }}" id="tools-link" class="dashboard-link tools-link">Tools</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Log Out
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        
    </div>

    <!-- Content area -->
    <div class="container">
    <div class="content" id="content">
        <h1 class="pb-5">Welcome {{ $user->name }} !</h1>
        <div id="tools-content"></div>
        <div class="container-fluid d-flex justify-content-between align-items-center pb-4" >
            <h4 class="m-0">Task List</h4>
            <a href="{{ route('TaskManagement.create') }}" class="btn btn-primary btn-sm">Create New Task</a>
        </div>
        <form action="{{ route('dashboard') }}" method="get" class="mb-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group shadow">
                        <input type="text" name="title" class="form-control " placeholder="Filter by Title">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group shadow">
                        <input type="text" name="description" class="form-control" placeholder="Filter by Description">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group shadow">
                        <select name="date_updated" class="form-select">
                            <option value="">Sort by Date Updated</option>
                            <option value="asc">Oldest First</option>
                            <option value="desc">Newest First</option>
                        </select>
                        
                    </div>
                    
                </div>
            </div>
            <div class="pt-3">
            <button type="submit" class="btn btn-primary btn-sm">Apply Filters</button></div>
        </form>
        @if($task && count($task) > 0)
        @foreach($task as $task)
            <div class="card text-black shadow p-3 mb-5 bg-white" style="border-radius: 25px;">
                <div class="card-header font-weight-bold" style="background-color: #ffffff; color: #050505;">
                    {{ $task->task_title }}
                    <div class="float-end">
                        <small>Last Updated - {{ $task->updated_at->setTimezone('Asia/Kuala_Lumpur')->format('d-m-Y h:i:s A') }}</small>

                    </div>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        {{ $task->task_description }}
                    </div>
                   
                    <div class="position-relative pt-5 ">
                       
                        <a href="{{ route('TaskManagement.edit', ['task' => $task->id]) }}" class="btn btn-success btn-sm">
                            Edit
                        </a>
                        <form action="{{ route('TaskManagement.destroy', ['task' => $task->id]) }}" method="post" style="display: inline-block">
                            {!! csrf_field() !!}
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this task?')">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        @else
            <p>No tasks available.</p>
        @endif
    </div>

    </div>
  
    
 @include('cdn')
    <script>
           $(document).ready(function () {
    $('#tools-link').click(function (e) {
        e.preventDefault();

        // Remove active class from Dashboard link
        $('.dashboard-link').removeClass('active');

        // Add active class to Tools link
        $(this).addClass('active');

        $.ajax({
            url: '{{ route('tools.content') }}',
            type: 'GET',
            success: function (response) {
                $('.content').html(response).fadeIn(); // Update this line
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });
});
   
    </script>
    

</body>
</html>
@endsection
