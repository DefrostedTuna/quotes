@extends('layouts.main')

@section('content')
    @foreach($quotes as $quote)
        <p>
            {{ $quote->text }} <br>
            {{ $quote->author->name }}
        </p>
    @endforeach
@endsection