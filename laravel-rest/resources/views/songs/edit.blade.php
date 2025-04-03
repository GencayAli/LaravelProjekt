@extends('layout')
@section('content')
    <h2>Song bearbeiten</h2>

    <form action="/songs/{{$song->id}}" method="post">
        @csrf
        @method('PUT')
     <p>
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
     </p>
     <p>
        <label for="band">Band</label>
        <input type="text" name="band" id="band">
     </p>
     <p>
        <label for="label">Label</label>
        <select type="text" name="labels_id_ref" id="label">
            @foreach (lables as $label)
                <option @if ($label->id === $song->labels_id_ref) selected @endif value="{{$label->id}}">{{$label->name}}></option>
            @endforeach
        </select>
     </p>
     <button name="Submit"> Änderung speichern>
            </form>
    
@endsection