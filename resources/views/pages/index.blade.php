@extends('layouts.app')
@section('title','Welcome to my Website')
@section('content')
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Cyber Links</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/signin">Sign in </a>
        </nav>
        <a class="btn btn-primary" href="/signup">Sign up</a>
    </div>

    <main role="main" class="container">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Recent links</h6>
            <div class="media text-muted pt-3">
                <img class="rounded-circle mr-2" src="https://api.adorable.io/avatars/285/abott@adorable.png" alt=""
                     style="height: 32px;">
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <span
                        class="d-block text-gray-dark"><strong>Nguyen Anh Tien</strong><span>&nbsp;@userA</span></span>
                    <span>let check out my site <a href="">https://cyber.com</a>!</span>

                    <div class="card mt-2">
                        <img class="card-img-top mt-4"
                             style="height: 200px; width: auto; max-height:100%; margin: auto;"
                             src="https://placeimg.com/640/480/tech" alt="Card image cap">
                        <div class="card-body">
                            <a href="https://cyber.com" style="color: inherit;">
                                <p class="card-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                                    tellus ac cursus
                                    commodo, tortor mauris
                                    condimentum nibh, ut fermentum massa justo sit amet risus...</p>
                            </a>
                        </div>
                    </div>
                </div>
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
                    <span
                        class="d-block text-gray-dark"><strong>Nguyen Anh Tien</strong><span>&nbsp;@userA</span></span>
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
                    <span
                        class="d-block text-gray-dark"><strong>Nguyen Anh Tien</strong><span>&nbsp;@userA</span></span>
                    THIS CONTENT WAS MARKED AS SPAM
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
