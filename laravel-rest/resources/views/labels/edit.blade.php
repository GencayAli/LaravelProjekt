@extends('layout')

@section('content')
  <form class="row" action="/labels/{{$label->id}}" method="post">
      @csrf
      @method('PUT')
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label" for="name">Name</label>
          <input class="form-control" type="text" name="name" id="name" value="{{$label->name}}">
        </div>
        
        <div class="mt-5">
          <button class="btn btn-success" type="submit">Speichern</button>
        </div>

        
        {{-- Fehlerausgabe --}}
        @if ($errors->any())
          <div class="alert alert-danger mt-5">
            <ul class="list-group">
              @foreach ($errors->all() as $error)
                <li class="list-group-item bg-transparent"> {!! $error !!} </li>
              @endforeach
            </ul>
          </div>
        @endif

      </div>
    
    </form>
@endsection