@extends('layouts.main')
@section('content')
<div class='row'>
    <div class='col-md-12 col-lg-8 mx-auto'>
    @foreach ($films as $film)
      @include('film._item')
    @endforeach
</div>
 </div>
    {{ $films->links() }}
@endsection
