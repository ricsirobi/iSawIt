<div class='card mb-3'>
    <div class='card-body'>
        <div class='d-flex'>
            <img width='240' height="auto" src='{{ $film->cover_image }}' alt='{{ $film->title }}' />
            <div class='ms-4'>
                 <h4 class='display-4'> <p class='fw-bold'>{{ $film->title }} </p></h4>
            <div class='mb-3'>
                <p class=''> <a class="btn btn-secondary" href="{{route('topic.show.film', $film-> topic)}}"> {{_('Film')}}, {{ $film->topic->name}}</a> | {{ $film->minute_long }} {{ __('minutes long') }} |
                    {{ $film->created_at->diffForHumans() }} </p>
            </div>

            <div class='mb-3'>
                <p class="text-end"> 
                    <a class = 'btn btn-sm btn-primary' href='{{ route('film.details',$film) }}'> {{__('Check')}}</a>    
                </p>
            </div>
            </div>
           
        </div>
    </div>
</div>