@extends('layout')

@section('content')
    <h2>Neues Song</h2>

    <form action="/songs" method="post"> 
            @csrf
        <p>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{old('title')}}">
        </p>
        <p>
            <label for="band">Band</label>
            <input type="text" name="band" id="band" value="{{old('band')}}">
        </p>
         <p>
            <label for="label">Label</label>
            <select name="labels_id_ref" id="labels_id_ref">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </p>
        <button name="Submit"> Speicher</button>
    </form>
    
    {{-- Fehlerausgabe --}}
    
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {!! $error !!}</li>
                @endforeach
            </ul>
        </div>
        
    @endif
@endsection