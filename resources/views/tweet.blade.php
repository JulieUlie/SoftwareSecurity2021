@extends('layouts.app')

@section('content')
<meta name="viewport" content="width=device-width">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tweets forum') }}</div>
                <div class="card-body bg-dark">
                    <form method="POST" class="form-group">
                        @csrf
                        <div class="col-12">
                            <input type="text" name="tweet" class="form-control" />
                        </div>
                        <div class="col-1 offset-10">
                            <input type="submit" class="btn btn-primary" />
                        </div>
                    </form>
                    @foreach($tweets as $tweet)
                    <div class="card p-3">
                        <div class="card-header">
                            {{ $tweet->user->name }}
                        </div>
                        <div class="card-body">
                            {{$tweet->tweet}}
                        </div>
                        <div class="card-footer">
                            {{$tweet->updated_at->diffForHumans() }}
                            @if($tweet->updated_at > $tweet->created_at)
                            (edited {{$tweet->updated_at->diffForHumans()}})
                            @endif
                        </div>
                    </div>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection