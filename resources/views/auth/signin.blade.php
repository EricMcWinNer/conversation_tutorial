@extends('layouts.auth')
@section('content')
    <h5>Sign In</h5>

    <form>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-lg mt-4 w-100 text-center">Sign In >></button>
            </div>
        </div>
    </form>

@endsection
