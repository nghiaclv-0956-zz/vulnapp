@extends('layouts.app')
@section('title','Admin')
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
      <h1>Admin</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Link</th>
            <th scope="col">By</th>
            <th scope="col">Type</th>
            <th scope="col">Reporter</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
              condimentum nibh, ut fermentum massa justo sit amet risus.</td>
            <td>
              Tien
            </td>
            <td>
              Spam
            </td>
            <td>
              Tuan
            </td>
            <td>
              <a href="#">Approve</a>
              <a class="text-danger" href="#">Reject</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
              condimentum nibh, ut fermentum massa justo sit amet risus.</td>
            <td>
              Tien
            </td>
            <td>
              Inappropriate Content
            </td>
            <td>
              Tuan
            </td>
            <td>
              <a href="#">Approve</a>
              <a class="text-danger" href="#">Reject</a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
              condimentum nibh, ut fermentum massa justo sit amet risus.</td>
            <td>
              Tien
            </td>
            <td>
              Broken Link
            </td>
            <td>
              Tuan
            </td>
            <td>
              <a href="#">Approve</a>
              <a class="text-danger" href="#">Reject</a>
            </td>
          </tr>
        </tbody>
      </table>
    </main>
@endsection
