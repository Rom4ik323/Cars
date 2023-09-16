@extends('layouts.layout')


@section('content')
<div style="width: 40%; height: 54.5vh" class="container mt-5">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('register.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="user" class="form-label text-white">Name</label>
        <input type="text" class="form-control" id="username" name="name">
      </div>

    <div class="mb-3">
      <label for="email" class="form-label text-white">Email address</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label text-white">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>

    <div class="mb-3">
        <label for="password-confirmation" class="form-label text-white">Confirm Password</label>
        <input type="password" class="form-control" id="password-confirmation" name="password_confirmation">
      </div>
    <button type="submit" >Зарегистрироваться</button>
  </form>
</div>

@endsection

<style>


  button {
    cursor: pointer;
    border: 1px solid white;
    background-color: transparent;
    height: 50px;
    width: 200px;
    color: white;
    font-size: 0.9em;
    font-family: 'Roboto', sans-serif;
}

button:hover{
      background-color: white;
      color: black;
        transition: 1s;
        
    }
</style>