<x-mail::message>
# welcome {{$data->name}}

An account has been created to be admin
<br>
email: {{$data->email}}
<br>
password: {{$data->pass1}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
