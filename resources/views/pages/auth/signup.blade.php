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
    

    <form action="{{route('signup')}}" method="post" class="loginform">
    @csrf
    <h2 class="title">Sign Up Form</h2>

    <div class="container">

        <label for="name"><b>Name:</b></label>
        <input type="text" placeholder="Enter Name" name="name">
        @if($errors->first('name'))
            <span class="text-danger"> {{$errors->first('name')}} </span>
        @endif
        <br>
        <label for="email"><b>Email:</b></label>
        <input type="text" placeholder="Enter Email" name="email">
        @if($errors->first('email'))
            <span class="text-danger"> {{$errors->first('email')}} </span>
        @endif
        <br>
        <label for="psw"><b>Password:</b></label>
        <input type="password" placeholder="Enter Password" name="password">
        @if($errors->first('password'))
            <span class="text-danger"> {{$errors->first('password')}} </span>
        @endif    


        <button type="submit">Sign Up</button>
               
    </div>

    <div class="container" >
        <a href="{{route('client.login')}}" class="cancelbtn">Cancel</a>
    </div>
    </form>
</div>

@endsection