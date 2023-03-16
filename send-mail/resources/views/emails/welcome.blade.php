<x-mail::message>
# Welcome mail

Welcome {{$userName}} to our site

<x-mail::button :url="'https://ahmed-h.epizy.com/'">
    Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
