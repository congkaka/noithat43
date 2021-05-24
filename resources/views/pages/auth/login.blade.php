@extends('layouts.web')
@section('css')
<style>
    .login {
        width: 30%;
        margin: 30px auto;
    }

    .loginform {
        border: 3px solid #f1f1f1;
        overflow: auto;
    }

    .loginform .title {
        text-align: center;
        margin-top: 20px;
    }

    .loginform input[type=text],
    .loginform input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .loginform button {
        background-color: #222;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    .loginform button:hover {
        opacity: 0.8;
    }

    .loginform .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
        color: white;
    }

    .loginform .cancelbtn:hover {
        opacity: 0.8;
    }

    .loginform .container {
        padding: 16px;
    }

    .loginform span.psw {
        float: right;
        padding-top: 16px;
    }
    .loginform span.psw a{
        color:blue;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 500px) {

        .login {
            width: 50%;
            margin: 30px auto;
        }

        .loginform span.psw {
            display: block;
            float: none;
        }

        .loginform .cancelbtn {
            width: 100%;
        }
    }
</style>

@endsection
@section('content')

<div class="login">


    <form action="{{route('client.login')}}" method="post" class="loginform">
        @csrf
        <h2 class="title">Login Form</h2>

        <div class="container">
            @if (session('errmsg'))
            <p class="text-danger text-center">{{session('errmsg')}}</p>
            @endif
            <label for="email"><b>Email:</b></label>
            <input type="text" placeholder="Enter Email" name="email">

            <label for="password"><b>Password:</b></label>
            <input type="password" placeholder="Enter Password" name="password">

            <button type="submit">Login</button>

        </div>

        <div class="container">
            <a href="/" class="cancelbtn">Cancel</a>
            <span class="psw">
                <a href="{{route('signup')}}">Sign Up</a>
                <span>Or</span>
                <a href="#">Forgot password?</a>
            </span>
        </div>
    </form>
</div>

@endsection