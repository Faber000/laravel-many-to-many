@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Categorie</h1>
        </div>
        <div class="card-body">
            <div class="mb-2">
                <a class="btn btn-success" href="{{route('admin.categories.create')}}" >Crea categoria</a>
            </div>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Azioni</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->slug}}</td>
                        <td class="buttons">
                            <a class="btn btn-primary" href="{{route('admin.categories.show', $category->id)}}" >Visualizza</a>
                            <a class="btn btn-warning" href="{{route('admin.categories.edit', $category->id)}}" >Modifica</a>
                            <form action="{{route('admin.categories.destroy', $category->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" >Cancella</button>
                            </form>
                        </td>                    
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection