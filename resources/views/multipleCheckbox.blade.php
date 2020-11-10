@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="showimages"></div>
        </div>
        <div class="col-md-6 offset-3 mt-5">
            <div class="card">
                <div class="card-header bg-info">
                    <h6 class="text-white">How To Store Multiple Checkbox Value In Database using Laravel - NiceSnippets.com</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-right mb-3">
                            <a href="{{ route('posts.create') }}" class="btn btn-success">Create</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->name }}</td>

                            <td>
                                @foreach($post->category as $value)
                                    {{$value}},
                                @endforeach
                            </td>
                            <td>{{ $post->description }}</td>
                        <td><a href="{{route('posts.show', $post->id)}}" class="btn btn-info">View</a> </td>
                        <td><form action="" method="get">
                            <input type="hidden" value="{{$post->id}}">
                            <button type="submit" class="btn btn-info">View</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

@endsection
