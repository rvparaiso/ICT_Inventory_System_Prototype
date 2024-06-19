@extends('layouts.app')

@section('content')

<style>

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background: #ffffff;
  overflow: hidden;
}
::selection {
  background: rgba(26, 188, 156, 0.3);
}
.wrapper {
  max-width: 500px;
  width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
}
.wrapper .title {
  height: 120px;
  background: #000000;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form {
  padding: 25px 35px;
}
.wrapper form .row {
  height: 60px;
  margin-top: 15px;
  position: relative;
}
.wrapper form .row input {
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 70px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 18px;
  transition: all 0.3s ease;
}
form .row input:focus {
  border-color: #16a085;
}
form .row input::placeholder {
  color: #999;
}
.wrapper form .row i {
  position: absolute;
  width: 55px;
  height: 100%;
  color: #fff;
  font-size: 22px;
  background: #16a085;
  border: 1px solid #16a085;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass {
  margin-top: 12px;
}
.wrapper form .pass a {
  color: #16a085;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover {
  text-decoration: underline;
}
.wrapper form .button input {
  margin-top: 20px;
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: #16a085;
  border: 1px solid #16a085;
  cursor: pointer;
}
form .button input:hover {
  background: #12876f;
}
.wrapper form .signup-link {
  text-align: center;
  margin-top: 45px;
  font-size: 17px;
}
.wrapper form .signup-link a {
  color: #16a085;
  text-decoration: none;
}
form .signup-link a:hover {
  text-decoration: underline;
}


</style>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body"> -->
                <div class="container">
                <div class="wrapper">
                <div class="title"><span>Login Form</span></div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
            
                        <div class="row">
                        <i class="fas fa-user"></i>

                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->
                            <!-- <div class="col-md-6"> -->
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       

                <div class="row">
                        <i class="fas fa-lock"></i>

                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->
                            <!-- <div class="col-md-6"> -->
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                      





                <div class="pass"><a href="{{ route('password.request') }}">Forgot password?</a></div>
                <div class="pass"><a href="{{ route('register') }}">No Login? Register Here</a></div>
      


                <div class="row button">
                    <input type="submit" value="Login">
                </div>
          
                       

                        
<br>

                               
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
