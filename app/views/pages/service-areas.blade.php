@extends('layouts.default')
@section('content')
<div class="container">
  <h3>Service Areas</h3>
  <dl> 
  @foreach ($serviceAreas as $serviceArea)
    <dt>{{ $serviceArea['title'] }}</dt>
    @foreach ($serviceArea['children'] as $children)
    <dd>{{ $children }}</dd>
    @endforeach
  @endforeach
  </dl>
</div>
@stop