@extends('base')

@section('content')
<div class="container">
    <h1 class="text-center mt-5">Articles</h1>
    <div class="d-flex justify-content-center">
      <a href="{{ route('article.create') }}" class="btn btn-info my-4"><ai class="fas fa-plus mx-2"></i>Ajouter un article</a>
    </div>
    <table class="table table-hover">
        <thead>
          <tr class="table-active">
            <th scope="col">ID</th>
            <th scope="col">Titre</th>
            <th scope="col">Crée le</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($articles as $article)
            <tr>
                <th>{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->dateFormatted() }}</td>
                <td class="d-flex">
                    <a href="#" class="btn btn-warning mx-3">Editer</a>
                    <form action="{{ route('article.delete', $article->id) }}" method="post">
                      @csrf
                      @method("delete")
                      <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content mt-5">
        {{$articles->links('vendor.pagination.custom')}}
    </div>
</div>
@endsection