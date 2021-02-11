
@extends('layouts.main')

@section('content')
@include('sections.intro')

<main id="main">
  @include('sections.about')
  {{--@if(Auth::check())--}}
  {{--  @include('sections.subscribe')--}}
    {{--@include('sections.register')--}}
  @if(Auth::check())
  @include('sections.speakers')

  @include('sections.schedule')

  @include('sections.venues')
  {{--@endif--}}
  {{--@include('sections.hotels')--}}
  @include('sections.gallery')

{{--  @include('sections.host_country')--}}

  @include('sections.faq')

{{--  @include('sections.subscribe')--}}

{{--  @include('sections.buy_ticket')--}}
  @include('sections.contact')
  {{--@if(!Auth::check())--}}
  {{--@include('sections.login')--}}
  {{--@endif--}}
{{--  @include('sections.register')--}}
  @endif

</main>
@endsection