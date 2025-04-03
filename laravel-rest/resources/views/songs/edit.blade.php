@extends('layout')
@section('content')
    <h2>Song bearbeiten</h2>

    <form class="row" action="/songs/{{$song->id}}" method="post">
        @csrf
        @method('PUT')
     <div class="col-md-6">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="{{$song->title}}">
     </div >
     <div class="mb-3">
        <label for="band">Band</label>
        <input class="form-control" type="text" name="band" id="band">
     </div>
     <div class="mb-3">
        <label for="label">Label</label>
        <select class="form-select" type="text" name="labels_id_ref" id="label">
            @foreach (lables as $label)
                <option @if ($label->id === $song->labels_id_ref) selected @endif value="{{$label->id}}">{{$label->name}}></option>
            @endforeach
        </select>
     </div>
     <div class="mb-3">
     <button class="btn btn-success" type="Submit"> Änderung speichern>
    </div>
 </form>
    
@endsection