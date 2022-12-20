@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <p>Your Social Media</p>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__("You are connected to these platforms")}}</div>
                <div class="card-body d-flex gap-3">
                    @foreach (Auth::user()->socials as $social)
                        <div class="btn btn-primary">
                            <i class="bi bi-{{$social->provider}} fs-2"></i>
                            <p>{{$social->provider}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
