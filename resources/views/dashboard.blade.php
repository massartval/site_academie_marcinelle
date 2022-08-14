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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Classes
                </div>
                <div class="card-body">
                    <div>Class (Teacher's name) - classroom - time schedule</div>
                    <br>
                    <div>Guitar (Mr String) - C12 - Wednesday 5.20PM</div>
                    <br>
                    <div>Piano (Mrs Key) - C1 - Tuesday 6.10PM</div>
                    <br>
                    <div>Music theory (Mrs Sheet) - C1 - Wednesday 6.10PM</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
