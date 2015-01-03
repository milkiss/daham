@extends('layouts.default')
@section('content')
<div class="container">
  <h3>{{ Lang::get("service-areas.name") }}</h3>
  <dl> 
  @foreach (Lang::get("service-areas.body") as $serviceArea)
    <dt>{{ $serviceArea['title'] }}</dt>
    @foreach ($serviceArea['body'] as $body)
    <dd>{{ $body }}</dd>
    @endforeach
  @endforeach
  </dl>
</div>
@stop