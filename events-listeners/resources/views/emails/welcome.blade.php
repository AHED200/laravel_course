<x-mail::message>
# HELLO {{$user->name}}

<h2>Welcome to our site</h2>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
