<x-mail::message>
# Introduction

The request has been sent successfully..,<br/>
Requisition number for review{{$save->id}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
