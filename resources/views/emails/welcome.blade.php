@component('mail::message')
# Sinmiloluwa from Renager

Welcome to Renager

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
