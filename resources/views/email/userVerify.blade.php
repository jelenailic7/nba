@component('mail::message')
# Introduction

Welcome to the site {{$user['name']}}
Your registered email-id is {{$user['email']}} , Please click on the below link to verify your email account


@component('mail::button', ['url' => 'http://localhost:8000/verify/' .$user->id])
Verify email
@endcomponent

Thanks,<br>
your Jelena Ilic.
@endcomponent
