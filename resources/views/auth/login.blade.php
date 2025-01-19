@extends('layout.sub-master')
@section('title', 'Registration')
@section('register-page')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Plus Jakarta Sans", sans-serif;

    }

    body{
        min-height: 100vh;
        display: grid;
        align-items: center;
        justify-content: center;
        color: #313638;
        padding: 0 20px;
    }

    .logo-class {
        display: grid;
        height: 1vh;
    }

    .logo-class img {
        width: 20%;
        justify-self: center;
    }

    .container{
        position: relative;
        max-width: 400px;
        /* width: 800px; */
        background: white;
        padding: 15px;
        border-radius: 20px;
        box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.1);
        margin: 20px;
    }
    .login-form{
        justify-content: center;
        margin-left: 20px;
        margin-right: 20px;
    }

    .title{
        text-align: center;
        font-size: 30px;
        font-weight: 800;
    }
    .title p, .paragraf p{
        margin-bottom: 0;
    }

    .container .login-form{
        margin-top: 30px;
    }
    .login-form .field{
        width: 100%;
        /* margin-top: px; */

    }

    .login-form .field input{
        position: relative;
        height: 50px;
        width: 320px;
        outline: none;
        font-size: 90%;
        margin-top: 8px;
        border-radius: 10px;
        background-color: rgba(227, 227, 227, 0.56);
        border: 1px solid white;
        padding: 0 15px;
    }

    .login-form {
        display: flex;
        column-gap: 15px;

    }

    @media screen and (max-width: 500px){
        .login-form .rightfield{
            flex-wrap: wrap;
        }
    }
    .paragraf{
        margin-top: 10px;
        text-align: center;
    }

    .login-form :where(.role-option, .rolefield){
        display: flex;
        align-items: center;
        column-gap: 15px;

    }

    .login-form .rolefield{
        column-gap: 5px;
        cursor: pointer;
    }

    .login-form :where(.rolefield input, .rolefield label){
        cursor: pointer;
    }

    .login-form .role-box{
        margin-top: 20px;
        justify-items: center;
        /* width: 95%; */
    }

    .form-check-input:checked {
        background-color: #E489A9;
        border-color: #E489A9;
    }

    .role-box h3{
        color: rgb(119, 116, 116);
        font-size: 1rem;
        font-weight: 400;
        margin-bottom: 8px;
    }

    .login-form button:hover{
        background-color: rgb(24, 248, 174);
    }

    .login-form button{
        height: 55px;
        width: 100%;
        background-color: #1abc9c;
        font-weight: 600;
        border: none;
        font-size: 1.2rem;
        color: white;
        margin-top: 10px;
        cursor: pointer;
        border-radius: 15px;
        transition: all 0.2s ease;
    }

    .login-form .signup-link{
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .check-confirm {
        font-size: 12px;
    }

    .error{
        /* margin-top: 10px; */
        /* text-align: center; */
        color: red;
        font-size: 13px;
    }
/* 
    .errormsg .alert-alert-success{
        color: green;
    } */

    .signup-link p a{
        text-decoration: none;
    }

</style>

@if (session()->has("success"))
    <div class="alert alert-success">
        {{  session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has("loginError"))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{  session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<section class="logo-class">
    <img src="img/Logo2.svg" alt="">
</section>
<section class="container">
    <form action="{{ route('login.post') }}" method="post" class="login-form">
        @csrf
        <div class="all-form">
            <div id="border-form">
                <div class="title">
                    <p>Sign In</p>
                </div>
                <div class="paragraf">
                    <p>Welcome back!</p>
                </div>
                <div class="field">
                    <label class="form-label"></label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="field">
                    <label class="form-label"></label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                    @if ($errors->has('password'))
                        <div class="error">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <button type="submit" class="submit-button">Sign In</button>
                <div class="signup-link">
                    <p>Didn't have account yet? <a href="{{route('register')}}">Sign Up</a></p>
                </div>
            </div>
        </div>
        </form>
</section>
@endsection

