@extends('u2-master')


@section('content')
    <div class="card">
        <div class="card-header">
            {{ $heading }}
        </div>
        <div class="card-body">
            <p class="card-text">{{ $content }}</p>
        </div>
    </div>
@endsection
