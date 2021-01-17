@extends('layouts.app')

@section('content')
<meta name="viewport" content="width=device-width">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} - {{ __('You are logged in!') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <script src="https://cdn.cai.tools.sap/webchat/webchat.js" channelId="27e65129-5fcb-412d-9d13-1f6958b93573" token="5983b3c6aefc748e9a3328421e428475" id="cai-webchat">
                    </script>
                    <passport-clients></passport-clients>
                    <br>
                    <passport-authorized-clients></passport-authorized-clients>
                    <br>
                    <passport-personal-access-tokens></passport-personal-access-tokens>
                    <br><br><br>
                    <button onclick="window.location.href='/tweet'" type="button" class="btn btn-success">Tweet forum REST API</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection