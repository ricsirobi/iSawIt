@extends('layouts.main')
@section('content')
<h1 class='display-1'> {{__('Series')}}: {{$topic->name}} </h1>
<div class='row'>
    <div class='col-md-12 col-lg-8 mx-auto'>
    @forelse ($series as $serie)
      @include('serie._item')
      @empty 
        <div class="alert alert-warning"> {{__("No series to show")}}</div>
    @endforelse
</div>
 </div>
    {{ $series->links() }}
@endsection
