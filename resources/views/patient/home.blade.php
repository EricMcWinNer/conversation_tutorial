
@extends('layouts.home')
@section('content')
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
        <!-- Navbar content -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Doctors Chat!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <form class="d-flex">
                    <a class="link-primary" href="#">Logout</a>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3>Hello Eric,</h3>
                <p>There are 7 patients online today. Click on any one to chat with them</p>
            </div>
        </div>
        <div class="row mt-3 text-center">
            <div class="col-md-3">
                <div class="avatar">
                    EM
                </div>
                <p>Eric McWinNEr</p>
            </div>
            <div class="col-md-3">
                <div class="avatar">
                    EM
                </div>
                <p>Eric McWinNEr</p>
            </div>
            <div class="col-md-3">
                <div class="avatar">
                    EM
                </div>
                <p>Eric McWinNEr</p>
            </div>
            <div class="col-md-3">
                <div class="avatar">
                    EM
                </div>
                <p>Eric McWinNEr</p>
            </div>
        </div>
    </div>
@endsection
