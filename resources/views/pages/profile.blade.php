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
      <div class="container">
        <div class="row">
          <div class="col-4">
            <div class="d-flex flex-column my-3 p-3 bg-white rounded shadow-sm text-center">
              <img class="rounded-circle mx-auto" src="https://api.adorable.io/avatars/285/abott@adorable.png" alt=""
                width="64" height="64">
              <strong class="p-2 text-muted" href="#">@vigov5</strong>
              <a class="p-2 text-dark" href="#">Nguyen Anh Tien</a>
              <div>
                <a class="btn btn-outline-primary" href="#">Follow</a>
                <hr>
                <div>
                  <label for="exampleFormControlFile1">
                    <h6>Change Avatar</h6>
                  </label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                  <button class="btn-sm mt-2 btn-primary" href="#">Upload</button>
                </div>
              </div>
            </div>
            <div class="d-flex flex-column my-10 px-2 pb-4 bg-white rounded shadow-sm text-center">
              <h5 class="mb-5">Follow Requests</h5>
              <div class="d-flex flex-row mb-2 justify-content-between">
                <div class="text-left col-6">Tuan @tuan</div>
                <div class="col-6 d-flex flex-row justify-content-end">
                  <a class="btn-sm mr-2 btn-primary" href="#">Approve</a>
                  <a class="btn-sm btn-danger" href="#">Reject</a>
                </div>
              </div>
              <div class="d-flex flex-row mb-2 justify-content-between">
                <div class="text-left col-6">Tuan @tuan</div>
                <div class="col-6 d-flex flex-row justify-content-end">
                  <a class="btn-sm mr-2 btn-primary" href="#">Approve</a>
                  <a class="btn-sm btn-danger" href="#">Reject</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-8">
            <div class="my-3 p-3 bg-white rounded shadow-sm">
              <h6 class="border-bottom border-gray pb-2 mb-0">Recent links</h6>
              <div class="media text-muted pt-3">
                <img class="rounded-circle mr-2" src="https://api.adorable.io/avatars/285/abott@adorable.png" alt=""
                  style="height: 32px;">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                  <span class="d-block text-gray-dark"><strong>Nguyen Anh Tien</strong><span>&nbsp;@userA</span></span>
                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                  mauris
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
                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                  mauris
                  condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
                <small class="ml-2">
                  <a href="#">12 Likes</a>
                  <br>
                  <a href="#" class="text-muted">Report</a>
                </small>
              </div>
              <small class="d-block text-center mt-3">
                <strong>The End</strong>
              </small>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection
