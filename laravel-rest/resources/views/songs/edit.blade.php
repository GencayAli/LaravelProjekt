@extends('layout')
@section('content')
    <h2>Song bearbeiten</h2>

    <form class="row" action="/songs/{{$song->id}}" method="post">
        @csrf
        @method('PUT')


     <div class="col-md-6">
        <div class="mb-3">
        <label class="form-label" for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="{{$song->title}}">
     </div >
     <div class="mb-3">
        <label class="form-label" for="band">Band</label>
        <input class="form-control" type="text" name="band" id="band">
     </div>
    </div>
    <div class="col-md-6">
     <div class="mb-3">
        <label class="form-label"  for="label">Label</label>
        <select class="form-select" type="text" name="labels_id_ref" id="label">
            @foreach (lables as $label)
                <option @if ($label->id === $song->labels_id_ref) selected @endif value="{{$label->id}}">{{$label->name}}</option>
            @endforeach
        </select>
     </div>

     <div class="mt-5">
     <button class="btn btn-success" type="Submit"> Änderung speichern</button>
    </div>
    </div>
 </form>
    
 {{--Fehlerausgabe--}}
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
     
 @endif
@endsection