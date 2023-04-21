@extends('layout')

@section('content')

<style>
    .container {
      max-width: 500px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<script>
    const words = {!! json_encode($words) !!};
</script>

<div class="card push-top">
  <div class="card-header">
    Ajouter un exemple de définition
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
      <form method="post" action="{{ route('examples.store') }}">
          <div class="form-group">
              <div>
                  <label for="word_id">Mot / Expression</label>
                  <br>
                  <select id="word_select_id" class="from-control" name="word_id">
                      @foreach ($words as $word)
                          <option value="{{$word->id}}">{{$word->word}}</option>
                      @endforeach
                  </select>
              </div>
              <div>
                  <label id="def_select_label" for="def_select_id" style="display:none;">Definitions</label>
                  <br>
                  <select id="def_select_id" class="from-control" name="definition_id" style="display:none;">
                  </select>
              </div>
          </div>
          <div class="form-group">
              @csrf
              <label for="word">Exemple</label>
              <textarea type="text" class="form-control" name="example"></textarea>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Ajouter un example</button>
      </form>
  </div>
</div>
@endsection
