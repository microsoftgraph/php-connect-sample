@extends('layouts.app')

@section('content')
<div>
    <p class="ms-font-xl">Use the button below to connect to Microsoft Graph.</p>
    <button id="connect_button" class="ms-Button" onclick="location.href='/oauth.php'">
        <span class="ms-Button-label">Connect to Microsoft Graph</span>
    </button>
</div>
@endsection