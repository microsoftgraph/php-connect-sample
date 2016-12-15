@extends('layouts.app')

@section('content')
<form action="/email", method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="ms-Grid-col ms-u-mdPush1 ms-u-md9 ms-u-lgPush1 ms-u-lg6">
        <h2 class="ms-font-xxl ms-fontWeight-semibold">
            Hi, {{ $name }}
        </h2>
        <p class="ms-font-xl">
            You're now connected to Microsoft Graph. Click the button below to send a message from your account using the Microsoft Graph.
        </p>
        <div class="ms-TextField">
            <input class="ms-TextField-field" name="input_email" value="{{ $email }}">
        </div>
        <button id="send_mail_button" class="ms-Button">
            <span class="ms-Button-label">Send mail</span>
        </button>
        @if ($status == "success")
        <p class="ms-font-m ms-fontColor-green">
            Successfully sent an email!
        </p>
        @endif
    </div>
</form>
@endsection