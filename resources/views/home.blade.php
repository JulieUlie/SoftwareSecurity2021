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
                    <passport-clients></passport-clients>
                    <br>
                    <passport-authorized-clients></passport-authorized-clients>
                    <br>
                    <passport-personal-access-tokens></passport-personal-access-tokens>
                    <br><br><br>
                    <button onclick="window.location.href='/tweet'" type="button" class="btn btn-success">See Tweets</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"><h1>Documentation</h1></div>

                <div class="card-body">
                    <p>This API uses OAUTH2. Please authenticate your requests using OAUTH2 formats. For example, if you use a personal access token (created above), then the request should contain a header named Authorization in the format: Bearer tokenhere</p>
                    Endpoints:
                    <ul>
                        <li>/api/tweet</li>
                        <li>/api/user</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 my-2 p-0">
            <div class="card mx-1">
                <div class="card-header">/api/tweet</div>
                <div class="card-body">
                    <table class="table" style="width:100%">
                        <thead>
                        <tr>
                            <th>Verb</th>
                            <th>URI</th>
                            <th>Action</th>
                            <th>Form Data (Form URL Encoded)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>GET</td>
                            <td><code class=" language-php"><span class="token operator">/api/</span>tweet</code></td>
                            <td>index</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td><code class=" language-php"><span class="token operator">/api/</span>tweet</code></td>
                            <td>Create a Tweet</td>
                            <td>tweet</td>
                        </tr>
                        <tr>
                            <td>GET</td>
                            <td><code class=" language-php"><span class="token operator">/api/</span>tweet<span class="token operator">/</span><span class="token punctuation">{</span>id<span class="token punctuation">}</span></code></td>
                            <td>show</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td>PUT/PATCH</td>
                            <td><code class=" language-php"><span class="token operator">/api/</span>tweet<span class="token operator">/</span><span class="token punctuation">{</span>id<span class="token punctuation">}</span></code></td>
                            <td>update</td>
                            <td>tweet</td>
                        </tr>
                        <tr>
                            <td>DELETE</td>
                            <td><code class=" language-php"><span class="token operator">/api/</span>tweet<span class="token operator">/</span><span class="token punctuation">{</span>id<span class="token punctuation">}</span></code></td>
                            <td>destroy</td>
                            <td>N/A</td>
                        </tr>
                        </tbody>
                    </table>
                    <p>Form Data</p>
                    the PUT/PATH only seems to work with urlencoded data, however you can use a multipart form with the create tweet function.<br/>
                    Note you can only delete or update tweets which you own.
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 my-2 p-0">
            <div class="card mx-1">
                <div class="card-header">/api/user</div>
                <div class="card-body">
                    <table class="table" style="width:100%">
                        <thead>
                        <tr>
                            <th>Verb</th>
                            <th>URI</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>GET</td>
                            <td><code class=" language-php"><span class="token operator">/api/</span>user</code></td>
                            <td>index</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection