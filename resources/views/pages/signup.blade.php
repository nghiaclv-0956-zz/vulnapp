@extends('layouts.acc')
@yield('title','signup')
@section('content')
    <form class="form-signin">
      <img class="mb-4" src="https://appdata.chatwork.com/icon/1524/1524467.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputName" class="sr-only">Name</label>
      <input type="email" id="inputName" class="form-control" placeholder="Name" required autofocus>
      <label for="inputUser" class="sr-only">Username</label>
      <input type="email" id="inputUser" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <label for="inputPassword" class="sr-only">Confirm Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
      <p class="mt-5 mb-3 text-muted">Sun* R&D &copy; 1970-2019</p>
    </form>


@endsection
