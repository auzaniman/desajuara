@extends('home.layouts.app')

@section('title')
Desa Juara
@endsection

@section('content')
<div class="wrapper">
  @include('home.components.hero')
  @include('home.components.superiority')
  @include('home.components.feature')
</div>
@endsection
