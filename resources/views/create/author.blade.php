@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Ajouter un auteur
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('authors.store') }}">
          <div class="form-group">
              @csrf
              <label for="lastname">Nom</label>
              <input type="text" class="form-control" name="lastname"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="firstname">Prénom</label>
              <input type="text" class="form-control" name="firstname"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Créer un auteur</button>
      </form>
  </div>
</div>
@endsection
