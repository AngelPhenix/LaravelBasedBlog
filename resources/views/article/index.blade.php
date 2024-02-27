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
                    <button type="button" class="btn btn-danger" onclick="document.getElementById('modal-open').style.display='block'">Supprimer</button>
                    <form action="{{ route('article.delete', $article->id) }}" method="post">
                      @csrf
                      @method("delete")


                      <div class="modal" id="modal-open">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">SUPPRESSION D'ELEMENT DEFINITIVE</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Êtes-vous sûr de vouloir supprimer cet article ?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Oui</button>
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
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