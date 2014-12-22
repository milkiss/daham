@extends('layouts.default')
@section('content')
<div class="container">
  <ul>
  @foreach ($linksGroups as $linksGroup)
    <li>
      <p>{{ $linksGroup['country'] }}</p>
      <ul>
      @foreach ($linksGroup['children'] as $children)
        <li class="list-unstyled"> 
          <p><a href="{{ $children['link'] }}">{{ $children['name'] }}</a></p>
        </li>
      @endforeach
      </ul>
    </li>
  @endforeach
  </ul>
</div>
@stop