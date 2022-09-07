@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Test') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are testing!') }}

                </div>
            </div>
        </div>
    </div>
</div>

<hr/>

With "Yield"

<div class="container">
    @yield('firstSection')
    Something exists here
</div>

<div class="container">
    @yield('secondSection')
    Something exists here
</div>

<hr/>

With "Section" & "Show"

<div class="container">
    @section('firstSection')
    Something exists here
    @show
</div>

<div class="container">
    @section('secondSection')
    Something exists here
    @show
</div>

<hr/>

With "Section and "Show and "Include"

<div class="container">
    @section('thirdSection')
    Something exists here
    @show
</div>

<div class="container">
    @section('fourthSection')
    Something exists here
    @show
</div>

<hr/>

With "Include"

@include('test.includeTest')

@endsection