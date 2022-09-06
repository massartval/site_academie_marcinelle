@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Groups') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($groups as $group)
                    <div>
                        {{ $group->course->name }} {{ $group->teacher_name }} {{ $group->weekday }} {{ Carbon::parse($group->start_time)->format('H:i') }}
                    </div>
                    <div>
                        @foreach($group->hasStudents as $student) 
                        {{ $student->id }}
                        @endforeach
                    </div>
                    <br/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
