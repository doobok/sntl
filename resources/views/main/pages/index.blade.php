@extends('main.app')

@section('head')
@component('main.components.meta')

  @slot('title') {{__('seo.mp-title')}} @endslot
  @slot('description') {{__('seo.mp-description')}} @endslot
  @slot('image') @endslot
  @slot('date') 2021 @endslot

@endcomponent
@endsection

@section('content')

  @include('main.layouts.partials.mainpage.first-screen')
  @include('main.layouts.partials.wave-t')

  @include('main.layouts.partials.mainpage.solution-cards')
  @include('main.layouts.partials.wave-b')
  @include('main.layouts.partials.mainpage.numbers')
  @include('main.layouts.partials.wave-t')
  @include('main.layouts.partials.mainpage.completed-projects')
  @include('main.layouts.partials.mainpage.wave-w-g')
  @include('main.layouts.partials.mainpage.consumers')
  @include('main.layouts.partials.mainpage.wave-g-w')
  @include('main.layouts.partials.mainpage.vendors')
  @include('main.layouts.partials.mainpage.wave-w-g')
  @include('main.layouts.partials.mainpage.last-screen')


  @include('main.layouts.partials.mainpage.wave-b-w-grad')

@endsection
