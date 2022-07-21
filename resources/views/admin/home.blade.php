@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2 class="mb-3">Bentornato {{ Auth::user()->name }}!</h2>

                    <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Visualizza tutti i posts</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
