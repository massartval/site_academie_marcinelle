@foreach($groups as $group)
    <div>
        {{ $group->course->name }} {{ $group->teacher_name }} {{ $group->weekday }} {{ Carbon::parse($group->start_time)->format('H:i') }}
    </div>
    <div>
        All participants :
        @foreach($group->profiles as $profile) 
        {{ $profile->user->name }} {{ $profile->roles()->where('group_id', $group->id)->first()->name }}
        @endforeach
    </div>
    <div>
        Teachers : 
        @foreach($group->profiles as $profile) 
        @if ($profile->roles()->where('group_id', $group->id)->first()->id == 2)
            {{ $profile->user->name }}
        @endif
    @endforeach
    </div>
    <div>
        Students : 
        @foreach($group->profiles as $profile) 
            @if ($profile->roles()->where('group_id', $group->id)->first()->id == 3)
                {{ $profile->user->name }}
            @endif
        @endforeach
    </div>
    <hr>
@endforeach
