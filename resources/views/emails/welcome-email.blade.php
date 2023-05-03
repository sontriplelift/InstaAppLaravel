@component('mail::message')
# Welcome to InstaApp by SonNT

You can call me Sontriplelift. Click button below to go to my Github.

@component('mail::button', ['url' => 'https://github.com/sontriplelift'])
sontriplelift
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
