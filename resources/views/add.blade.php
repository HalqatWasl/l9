@extends('layouts.app')

@section('content')

@include('layouts.navbar')


<div class="container mt-5 pt-5">
    <form method="POST" action="{{ route('addp') }}">
        @csrf
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Name</label>
            <div class="col-8">
                <input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">Action</button>
            </div>
        </div>
    </form>
</div>

<div class="container">
    <form method="POST" action="{{ route('addd') }}">
        @csrf
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Name</label>
            <div class="col-8">
                <input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">Action</button>
            </div>
        </div>
    </form>
</div>

@endsection
