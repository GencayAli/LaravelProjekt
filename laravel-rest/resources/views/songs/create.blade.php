@extends('layout')

@section('content')
    <h2>Neues Song</h2>

    <form action="/songs" method="post"> 
            @csrf
        <div class="col-md-6">
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{old('title')}}">
            </div>
            <div class="mb-3">
                <label for="band">Band</label>
                <input type="text" name="band" id="band" value="{{old('band')}}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
            <label class="form-label" for="label">Label</label>
            <select class="form-select" name="labels_id_ref" id="label">
               @foreach ($labels as $label)
                   <option value="{{$label->id}}"></option>
               @endforeach
            </select>
            </div>
        </div>
        <div>
          <button class="btn btn succes" name="Submit"> Speicher</button>
        </div>
    </form>
    
    {{-- Fehlerausgabe --}}
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {!! $error !!}</li>
                @endforeach
            </ul>
        </div>
        
    @endif
@endsection