
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
              <form id="LoginFrom" class="mb-3" >
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="userName"
                    name="username" value="{{ old('username') }}"
                    placeholder="Enter your Email"
                    autofocus required
                  />
                  <span class="text-danger" id="nameErrorMsg"></span>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    {{-- <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a> --}}
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password" value="{{ old('password') }}"
                       placeholder="Enter your PassWord"
                      required 
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  <span id="passwordErrorMsg" class="text-danger" ></span>
                </div>
               
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                <small>If You Don't Account : </small>
                    <a href="/register">
                      <small>Create Customer</small>
                    </a> 
                  </div>
              </form>
              @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

             
            </div>
          </div>

@endsection

@section('javascript')
<script type="text/javascript">
  $('#LoginFrom').on('submit',function(e){
    e.preventDefault();
    // alert('submit');
    let userName = $('#userName').val();
    let password = $('#password').val();
    $.ajax({
      url :"{{route('login.check')}}",
      type : "POST",
      data : {
        "_token": "{{ csrf_token() }}",
        userName: userName,
        password:password
      },
      success:function(response){
        console.log(response);
        swal("Great!", "You Login Successfully!", "success"); 
       
        window.location.href = 'cusromer/dashboard';
      },
      error: function(response) {
        console.log(response.responseJSON.errors);
        // var errorData = responseJSON.errors;
        $('#nameErrorMsg').text(response.responseJSON.errors.userName);
        $('#passwordErrorMsg').text(response.responseJSON.errors.password);
        swal("Error!", response.responseJSON.errors.userName ? response.responseJSON.errors.userName : response.responseJSON.errors.password , "error"); 
        },
    });
  })

    </script>
@endsection