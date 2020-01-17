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
      <form class="mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="New link..." aria-label="Search">
        <button class="btn btn-success my-2" type="submit">Post</button>
        <select id="inputGroupSelect01">
          <option value="public">Public</option>
          <option value="private">Private</option>
        </select>
      </form>
      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Recent links</h6>
        <div class="media text-muted pt-3">
          <img class="rounded-circle mr-2" src="https://api.adorable.io/avatars/285/abott@adorable.png" alt=""
            style="height: 32px;">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <span class="d-block text-gray-dark"><strong>Nguyen Anh Tien</strong><span>&nbsp;@userA</span></span>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
            condimentum nibh, ut fermentum massa justo sit amet risus.
          </p>
          <small class="ml-2">
            <a href="#">12 Likes</a>
            <br>
            <a href="#" class="text-muted">Report</a>
          </small>
        </div>
        <div class="media text-muted pt-3">
          <img class="rounded-circle mr-2" src="https://api.adorable.io/avatars/285/deptrai@adorable.png" alt=""
            style="height: 32px;">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <span class="d-block text-gray-dark"><strong>Nguyen Anh Tien</strong><span>&nbsp;@userA</span></span>
            Private link! Only followers can see.
          </p>
          <small class="ml-2">
            <a href="#">12 Likes</a>
            <br>
            <a href="#" class="text-muted">Report</a>
          </small>
        </div>
        <div class="media text-muted pt-3">
          <img class="rounded-circle mr-2" src="https://api.adorable.io/avatars/285/khanhact@adorable.png" alt=""
            style="height: 32px;">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <span class="d-block text-gray-dark"><strong>Nguyen Anh Tien</strong><span>&nbsp;@userA</span></span>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
            condimentum nibh, ut fermentum massa justo sit amet risus.
          </p>
          <small class="ml-2">
            <a href="#">12 Likes</a>
            <br>
            <a href="#" class="text-muted">Report</a>
          </small>
        </div>
        <small class="d-block text-right mt-3">
          <a href="#">All links</a>
        </small>
      </div>
    </main>
@endsection
