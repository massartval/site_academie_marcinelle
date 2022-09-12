@foreach ($courses as $course)
<div>
    {{ $course->name }} ({{$course->domain->name}})
</div>
@endforeach