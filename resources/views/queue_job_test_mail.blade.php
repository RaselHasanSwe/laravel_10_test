<x-mail::message>
# Introduction

Queue Job Test Mail {{$user->name}} name Here

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
