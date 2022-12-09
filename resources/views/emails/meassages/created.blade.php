@component('mail::message')
# Hey Admin

- {{ $sms->nom .' '. $sms->prenom }}<br/>
- {{ $sms->email }}

The body of your message.

{{--  @component('mail::button', ['url' => '', 'color' => 'green'])
Creer un compte
@endcomponent --}}

@component('mail::panel')
{{ $sms->sms }}
@endcomponent

@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
