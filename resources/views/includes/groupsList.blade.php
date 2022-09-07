@foreach($groups as $group)
    <div>
        {{ $group->course->name }} {{ $group->teacher_name }} {{ $group->weekday }} {{ Carbon::parse($group->start_time)->format('H:i') }}
    </div>
    <div>
        @foreach($group->hasStudents as $student) 
        {{ $student->id }}
        @endforeach
    </div>
@endforeach
