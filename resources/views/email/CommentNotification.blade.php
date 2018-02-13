@component('mail::message')
# Introduction

Hello, {{$team->name}} you have a new comment.

@component('mail::button', ['url' => 'http://localhost:8000/teams/'.$team->id])
Click here
@endcomponent

Thanks,<br>
your Jelena Ilic .
@endcomponent

