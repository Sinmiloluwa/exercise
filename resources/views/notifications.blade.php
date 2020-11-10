@extends('layouts.app')

@section('content')
<div class="container">
<h3>Display all notifications</h3>

<ul>
@forelse ($notifications as $notification)
<li>
    @if ($notification->type == 'App\Notifications\PaymentReceived')
We have received a payment of ${{$notification->data['amount']/100}} from you
@endif
    </li>


@empty
<li>You have no unread notifications at this time</li>
@endforelse
</ul>
</div>

@endsection
