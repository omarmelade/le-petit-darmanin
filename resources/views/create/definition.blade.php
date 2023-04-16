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
    Add User
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
      <form method="post" action="{{ route('definitions.store') }}">
          <div class="form-group">
              @csrf
              <label for="word">Mot</label>
              <input type="text" class="form-control" name="word"/>
          </div>
          <div class="form-group">
              <label for="definition">Definition</label>
              <textarea class="form-control" name="definition" placeholder="La definition de votre mot">
              </textarea>
          </div>
          <div class="form-group">
              <label for="author_id">Auteur</label>
              <br>
              <select class="from-control" name="author_id">
                  @foreach ($authors as $author)
                      <option value="{{$author->id}}">{{$author->firstname." ".$author->lastname}}</option>
                  @endforeach
              </select>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Definition</button>
      </form>
  </div>
</div>
@endsection
