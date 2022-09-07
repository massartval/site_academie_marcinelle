@extends('layouts.app')

@section('content')

<div class="container">
    <!-- Dashboard title -->
    <div class="row justify-content-center">
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

    <!-- User info -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Info') }}</div>

                <div class="card-body">
                    <div>
                        Name : {{ auth()->user()->name; }}
                    </div>
                    <div>
                        ID : {{auth()->user()->id}}
                    </div>
                    <div>
                        Profile ID : {{auth()->user()->profile->id}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Groups -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Groups') }}</div>

                <div class="card-body">
                    @include('includes.groupsList')  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
