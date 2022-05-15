@extends('layouts.main')
@section('content')
    
    
    <div class="row">
        <div class="col-ld-2">
            <img src="{{$user->avatar}}" alt="{{$user->name}}" class="rounded-circle mb-2"/>
            <h3 class='display-3'> {{ $user->name }} </h3>
        </div>
        <div class='col-ld-10'>
            <?php $films = 0;?>
            @foreach ($user->saw as $item)
                <?php if($item->viewable_type == "App\Models\Film") $films++?>
            @endforeach
            {{__("Seen films: ")}}{{$films}}
        </div>
    </div>
@endsection
