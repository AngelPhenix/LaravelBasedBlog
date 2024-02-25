@extends('base')

@section('content')
<div class="container">
    <h1 class="text-center mt-5">Poster un nouvel article</h1>
    <form method="POST" action="{{ route('article.store') }}">
        @csrf
        <div class="col-12 mb-4">
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" class="form-control" placeholder="Titre de votre article">
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="form-group">
                <label for="subtitle">Sous-titre</label>
                <input type="text" name="subtitle" class="form-control" placeholder="Sous-titre de votre article">
                <small class="form-text text-muted">Décrire le contenu, le thème traité</small>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="content">Contenu</label>
                <textarea name="content" class="form-control w-100"></textarea>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button type="submit" class="btn btn-primary">Poster l'article</button>
        </div>
    </form>
</div>
@endsection