@extends('main.app')

@section('head')
@component('main.components.meta')

  @slot('title') SNTL главная @endslot
  @slot('description') description @endslot
  @slot('image') @endslot
  @slot('date') 2021 @endslot

@endcomponent
@endsection

@section('content')

  @include('main.layouts.partials.mainpage.first-screen')
  @include('main.layouts.partials.wave-t')

  @include('main.layouts.partials.mainpage.cards-vertical')
  @include('main.layouts.partials.wave-b')
  @include('main.layouts.partials.mainpage.numbers')
  @include('main.layouts.partials.wave-t')
  @include('main.layouts.partials.mainpage.cases')
  {{-- @include('main.layouts.partials.mainpage.cards') --}}
  @include('main.layouts.partials.mainpage.partners')
  @include('main.layouts.partials.mainpage.consumers')
  {{-- @include('main.layouts.partials.mainpage.customers') --}}
  {{-- @include('main.layouts.partials.mainpage.pricing') --}}
  {{-- @include('main.layouts.partials.mainpage.call-to-action') --}}

@endsection
