<!DOCTYPE html>
@extends('layout')
@section('content')
<section class="vh-100">
    <div class="container-fluid pt-2 h-custom">
      <div class="row d-flex justify-content-center p-md-5 card text-black shadow align-items-center h-100" style="border-radius: 25px;">
        
        <div class=" card-body col-md-8 col-lg-6 col-xl-4 offset-xl-1 ">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Log In</p>
          <form method="post" action="{{ route('login.check') }}">
              @csrf
              <!-- Email input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="email">Email address</label>
                  <input type="email" id="email" name="email" class="form-control form-control-lg"
                         placeholder="Enter a valid email address" />
              </div>
      
              <!-- Password input -->
              <div class="form-outline mb-3">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control form-control-lg"
                         placeholder="Enter password" />
              </div>
      
              <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg">Log in</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">
                      Don't have an account? <a href="{{ route('register') }}" class="link-danger">Register</a>
                  </p>
              </div>
          </form>
          @if (session('error'))
          <div class="alert alert-danger">
              {{ session('error') }}
          </div>
      @endif
      </div>
      
      </div>
    </div>
   
  </section>
  @stop