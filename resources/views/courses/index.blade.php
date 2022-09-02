@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Courses') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($courses as $course)
                    <div>
                        {{ $course->name }}
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
