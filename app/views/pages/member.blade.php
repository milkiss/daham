@extends('layouts.default')
@section('content')
<div class="container">
  <h3>{{ $data->name }}</h3>
  <div class="col-md-9">
    <h4>Educations and Qualifications</h4>
    <ul>
    @foreach ($data->EQ as $row)
      <li>
        <p>{{ $row->item }}</p>
      </li>
    @endforeach
    </ul>
    <h4>Experiences</h4>
    <ul>
    @foreach ($data->Exp as $row)
      <li>
        <p>{{ $row->item }}</p>
      </li>
    @endforeach
    </ul>
    <h4>Professionalism and Consulting for technologies, intellectual properties</h4>
    <ul>
    @foreach ($data->PC as $row)
      <li>
        <p>{{ $row->item }}</p>
      </li>
    @endforeach
    </ul>
  </div>
  <div class="col-md-3"><img src="http://dahampat.com/en/KimKyeounsoo.png"/></div>
</div>
@stop