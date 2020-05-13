@foreach ($users as $user)
<li>
    <hr>
    <h6>
        {{$user->id}}
        {{-- {{$user}} --}}
        <br>
        {{$user->name}} | {{$user->email}}
    </h6>
    <hr>
</li>

@endforeach
