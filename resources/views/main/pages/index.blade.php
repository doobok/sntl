@extends('main.app')

@section('head')
@component('main.components.meta')

  @slot('title') {{__('seo.mp-title')}} @endslot
  @slot('description') {{__('seo.mp-description', [
                        'phone' => setting('site.phone'),
                        'schedule' => setting('site.schedule'),
                        ])}}
  @endslot
  @slot('image') /main.png @endslot
  @slot('date') {{config('app.startdate')}} @endslot

@endcomponent
@endsection

@section('content')
<div class="gradient">
  <div uk-slideshow>
    <ul class="uk-slideshow-items">
      @foreach ($slides as $slide)
        <li>
            <img src="/storage/{{$slide->image}}" alt="" uk-cover>
        </li>
      @endforeach

    </ul>
</div>
  {{-- <mp-slideshow lang="{{app()->getLocale()}}" :slides="{{$slides}}"></mp-slideshow> --}}

  @include('main.layouts.partials.mainpage.services-cards')
  @include('main.layouts.partials.mainpage.numbers')
  @include('main.layouts.partials.mainpage.completed-projects')
  @include('main.layouts.partials.mainpage.consumers')
  @include('main.layouts.partials.mainpage.vendors')
  @include('main.layouts.partials.mainpage.last-screen')
</div>

@endsection
