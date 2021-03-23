@extends('layout/main')

@section('title', 'About Page')

@section('container')
<div class="container">
    <div class="row p-3">
        <div class="col-10">
            <h1>Hello, {{$nama}}!!</h1>
        </div>
    </div>
</div>
@endsection