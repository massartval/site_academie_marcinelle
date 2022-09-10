
{{--1--}}
@foreach($groups as $group)
    <div>
        {{ $group->course->name }} {{ $group->weekday }} {{ Carbon::parse($group->start_time)->format('H:i') }}
    </div>
    <div>
        Teachers : 
        @foreach($group->profiles as $profile) 
        @if ($profile->roles()->where('group_id', $group->id)->first()->name == 'Teacher')
            {{ $profile->user->name }}
        @endif
    @endforeach
    </div>
    <div>
        Students : 
        @foreach($group->profiles as $profile) 
            @if ($profile->roles()->where('group_id', $group->id)->first()->name == 'Student')
                {{ $profile->user->name }}
            @endif
        @endforeach
    </div>
    <hr>
@endforeach

{{--2
@foreach($groups as $group)
<br>
    <div>
        {{ $group->course->name }} {{ $group->weekday }} {{ Carbon::parse($group->start_time)->format('H:i') }}
    </div>
    <br>
    @foreach($group->profiles as $profile)
        {{ $profile->user->name}} 
        <br>
        {{ $profile->roles }}
        <br>
        <br>
    @endforeach
    <br>
    <hr>
@endforeach
--}}

{{--3
@foreach($gpr as $item)
    <div>
        {{ $item->group->id }} {{ $item->group->weekday }} {{ Carbon::parse($item->group->start_time)->format('H:i') }}
    </div>
    @if($item->role->name == 'Teacher')
        <div>
            {{ $item->profile->user->name}} (TEACHER)
        </div>
    @endif
    @if($item->role->name == 'Student')
        <div>
            {{ $item->profile->user->name}} (student)
        </div>
    @endif 
    <br>
@endforeach
--}}