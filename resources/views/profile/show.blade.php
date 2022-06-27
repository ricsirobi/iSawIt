@extends('layouts.main')
@section('content')
    
    
    <div class="row">
        <div class="col-ld-2">
            <img src="{{$user->avatar}}" alt="{{$user->name}}" class="rounded-circle mb-2"/>
            <h3 class='display-3'> {{ $user->name }} </h3>
        </div>
        <div class='col-ld-10'>
            <?php $films = 0; $episodes = 0;?>
            @foreach ($user->saw as $item)
                <?php if($item->viewable_type == \App\Models\Film::class) $films++;
                      if($item->viewable_type == \App\Models\Episode::class) $episodes++;
                ?>
            @endforeach
            <div >
                {{__("Seen films: ")}}{{$films}}
            </div>
            <div>
                {{__("Seen episodes: ")}}{{$episodes}}
            </div>
            

            <form action='{{ route('home') }}' method='post' enctype="multipart/form-data">
                @csrf
                <x-forms.title_button name="Delete user(Work In Progress)"/>
            </form>
        </div>
    </div>
@endsection
