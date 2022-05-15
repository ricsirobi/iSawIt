@extends('layouts.main')
@section('content')
<div class='row'>
    <div class='col-md-12 col-lg-8 mx-auto'>
    @foreach ($series as $serie)
      @include('serie._item')
    @endforeach
</div>
 </div>
    {{ $series->links() }}
@endsection
