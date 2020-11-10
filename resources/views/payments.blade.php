@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('payments')}}" method="post">
    @csrf
    <button class="btn btn-primary">
        Pay Now!
    </button>
    </form>
</div>

@endsection
