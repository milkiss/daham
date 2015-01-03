@extends('layouts.default')
@section('content')
<div class="container">
  <h3>{{ Lang::get($name.".name") }}</h3>
  <div class="col-md-9">
    @foreach (Lang::get($name.".career") as $career)
      <h4>{{ $career["title"] }}</h4>
      <ul>
      @foreach ($career["body"] as $body)
        <li>
          <p>{{ $body }}</p>
        </li>
      @endforeach
      </ul>
    @endforeach
  </div>
  <div class="col-md-3"><img src="/KimKyeounsoo.png"/></div>
</div>
@stop