<div class='card mb-3'>
    <div class='card-body'>
        <div class='d-flex'>
            <img width='240' height="auto" src='{{ $serie->cover_image }}' alt='{{ $serie->title }}' />
            <div class='ms-4'>
                 <h4 class='display-4'> <p class='fw-bold'>{{ $serie->title }} Season {{$serie->season}} </p></h4>
            <div class='mb-3'>
                <!-- Hiba: -->
                <p class=''> <a class="btn btn-secondary" href="{{route('topic.show.serie', $serie-> topic)}}"> {{_('Serie')}},
                     {{ $serie->topic->name}}</a> | {{ $serie->minute_long }} {{ __('minutes long') }} |
                    {{ $serie->created_at->diffForHumans() }} </p>
            </div>
            
            <div class='mb-3'>
                <p class="text-end"> 
                    <a class = 'btn btn-sm btn-primary' href='{{ route('serie.details',$serie) }}'> {{__('Check')}}</a>    
                </p>
            </div>
            </div>
           
        </div>
    </div>
</div>