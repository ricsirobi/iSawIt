@extends('layouts.main')
@section('content')
<h1 class='display-1'> {{__('Films')}}: {{$topic->name}} </h1>
<div class='row'>
    <div class='col-md-12 col-lg-8 mx-auto'>
    @forelse ($films as $film)
      @include('film._item')
      @empty 
        <div class="alert alert-warning"> {{__("No films to show")}}</div>
    @endforelse
</div>
 </div>
    {{ $films->links() }}
@endsection
