@extends('layouts.default')
@section('content')
<div class="container">
  <h3>{{ Lang::get($name.".name") }}</h3>
  <div class="col-md-9">
    <h4>{{ Lang::get($name.".EQ.0") }}</h4>
    <ul>
    @for ($i = 1; $i <= 3; $i++)
      <li>
        <p>{{ Lang::get($name.".EQ.".$i) }}</p>
      </li>
    @endfor
    </ul>
    <h4>{{ Lang::get($name.".Exp.0") }}</h4>
    <ul>
    @for ($i = 1; $i <= 4; $i++)
      <li>
        <p>{{ Lang::get($name.".Exp.".$i) }}</p>
      </li>
    @endfor
    </ul>
    <h4>{{ Lang::get($name.".Prof.0") }}</h4>
    <ul>
    @for ($i = 1; $i <= 5; $i++)
      <li>
        <p>{{ Lang::get($name.".Prof.".$i) }}</p>
      </li>
    @endfor
    </ul>
  </div>
  <div class="col-md-3"><img src="/KimKyeounsoo.png"/></div>
</div>
@stop