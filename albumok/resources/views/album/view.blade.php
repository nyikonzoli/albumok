@extends('layouts.main')

@section('title', 'Albums')

@section('content')
    <h1>List of best-selling albums</h1>
    <div class="container">
        <div class="row">
            @foreach($albums as $album)
                <div class="col-lg-3">
                    {{$album['title']}}
                </div>
            @endforeach()
        </div>
    </div>
@endsection()