@component('mail::message', ['user' => $user])
    hi hi {{ $user->email }}
@endcomponent