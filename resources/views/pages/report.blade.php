@extends('layouts.app')
@section('title','Welcome to my Website')
@section('content')
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Cyber Links</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <img class="rounded-circle" src="https://api.adorable.io/avatars/285/abott@adorable.png" alt=""
          style="height: 32px;">
        <a class="p-2 text-dark" href="#">Nguyen Anh Tien</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">Sign out</a>
    </div>

    <main role="main" class="container">
      <div class="jumbotron">
        <h3>Do you want to report?</h3>
        <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Nguyen Anh Tien <cite title="Source Title">@vigov5</cite></footer>
        </blockquote>
        <h4 class="mb-3">Report</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="broken" name="type" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="broken">Broken Link</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="content" name="type" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="content">Inappropriate Content</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="type" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">Spam</label>
          </div>
        </div>
        <a class="btn btn-lg btn-warning" href="#" role="button">Report</a>
      </div>
    </main>

@endsection
