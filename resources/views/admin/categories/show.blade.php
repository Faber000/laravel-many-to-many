@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$category->name}}</h1>
        </div>
        <div class="card-body">
            @if (count($category->posts) > 0)
                <div>
                    <h2>Post associati</h2>
                    <ul>
                        @foreach ($category->posts as $post)
                        <li>{{$post->title}}</li>                        
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection