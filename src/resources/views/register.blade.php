
@extends('main')



@section('content')
<div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                  <span class="app-brand-logo demo"> 
                    <img src="{{ asset('assets/img/logo.png') }}" style="width: 200px;height: 101px;">
                  </span>
                  
              </div>
              <!-- /Logo -->
              <form action="{{route('register.create')}}"
                        method="post" enctype="multipart/form-data">
              
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Customer Name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="name" value="{{ old('name') }}"
                    placeholder="Enter Customer Name"
                     required />
                 
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email Id</label>
                  <input
                    type="text"
                    class="form-control"
                    name="email" value="{{ old('email') }}"
                    placeholder="Enter Email Id"
                     required />
                 
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Phone Number</label>
                  <input
                    type="number"
                    class="form-control"
                    name="phone" value="{{ old('phone') }}"
                    placeholder="Enter Phone Number"
                     required />
                 
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Id Proof</label>
                  <input
                    type="file"
                    class="form-control"
                    name="id_proof_img" value="{{ old('id_proof_img') }}"
                    placeholder="Enter Id Proof"
                     required />
                 
                </div>
                <div class="mb-3 form-password-toggle">
                <label for="email" class="form-label">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      class="form-control"
                      name="password" value="{{ old('password') }}"  placeholder="Enter your Password"
                      required    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                 
                </div>
                
               
                <div class="mb-3">
                
                  <button class="btn btn-primary d-grid w-100" type="submit">Register</button>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                <small>If You have Account : </small>
                    <a href="/login">
                      <small>Login</small>
                    </a> 
                  </div>
              </form>

               <!-- @if ($errors->any()) -->
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        <!-- @endif
        @if(session('success')) -->
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        <!-- @endif -->

             
            </div>
          </div>

         

@endsection
