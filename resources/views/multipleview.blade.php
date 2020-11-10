@extends('layouts.app')

@section('content')
 <div class="container">
    <ul>
        @foreach ($posts as $post)
    <li>{{$post->name}}</li>
        @endforeach

    </ul>
 </div>
@endsection
