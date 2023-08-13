<!DOCTYPE html>
@extends('layout')
@section('content')
<section class="vh-100  p-2"  style="background-color: #ffffff;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black shadow p-3 mb-5 bg-white " style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10   order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Create Task</p>
  
                  <form action="{{route('TaskManagement.store')}}" method="post" >
                    {!! csrf_field()!!}
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="task_title">Task Title</label>
                        <input type="text" name="task_title" id="task_title" class="form-control" />
                       
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="task_description">Task Description</label>
                        <input type="textarea" name="task_description" id="task_description" class="form-control" />
                       
                      </div>
                    </div>
  

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">Create</button>
                      
                    </div>
                   
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection