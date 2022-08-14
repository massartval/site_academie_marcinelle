@extends('layouts.app')

@section('content')
<div class="container">
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
            <div class="card">
               <div class="card-body">
                Name : {{ auth()->user()->name; }}
                <br>
                ID : {{auth()->user()->id}}
                <br>
                Profile ID : {{auth()->user()->profile->id}}
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
