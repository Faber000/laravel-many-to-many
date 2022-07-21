@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Crea categoria</h1>
            </div>
            <div class="card-body">
                <form action="{{route('admin.categories.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text"  id="name" name="name" value="{{old('name')}}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit" >Crea</button>
                </form>
            </div>
        </div>
    </div>
@endsection