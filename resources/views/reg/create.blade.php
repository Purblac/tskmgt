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
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
  
                  <form action="{{route('confirm')}}" method="post" >
                    {!! csrf_field()!!}
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" />
                       
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" />
                       
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" />
                      </div>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">Register</button>
                      
                    </div>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="{{ route('TaskManagement.create') }}"
                      class="link-danger">Log In</a></p>
                  </form>
                  @if(isset($message))
                      <div class="alert alert-danger">
                          {{ $message }}
                      </div>
                  @endif
  
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection