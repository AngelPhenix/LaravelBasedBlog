@extends('base')

@section('content')
<div class="container">
    <h1 class="text-center mt-5">Poster un nouvel article</h1>
    <form method="POST" action="{{ route('article.store') }}">
        @csrf
        <div class="col-12 mb-4">
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Titre de votre article">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="form-group">
                <label for="subtitle">Sous-titre</label>
                <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" placeholder="Sous-titre de votre article">
                @error('subtitle')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="content">Contenu</label>
                <textarea name="content" class="form-control w-100 @error('content') is-invalid @enderror"></textarea>
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button type="submit" class="btn btn-primary">Poster l'article</button>
        </div>
    </form>
</div>
@endsection