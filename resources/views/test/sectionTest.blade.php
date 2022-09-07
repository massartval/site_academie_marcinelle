@extends('test.test')

@section('firstSection')
    @parent
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('First Section') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div>
                        With "Parent"
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('secondSection')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Second Section') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div>
                        Without "Parent"
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('thirdSection')
    @parent
    @include('test.includeTest')
    With "Parent"
@endsection

@section('fourthSection')
    @include('test.includeTest')
    Without "Parent"
@endsection

@include('test.includeTest')
