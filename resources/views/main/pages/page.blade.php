@extends('main.app')

@section('head')
@component('main.components.meta')

  @slot('title') {{$page->getTranslatedAttribute('title')}} @endslot
  @slot('description') {{$page->getTranslatedAttribute('description')}} @endslot
  @slot('image') {{ Voyager::image( $page->seo_image ) }} @endslot
  @slot('date') {{$page->created_at}} @endslot

@endcomponent
@endsection

@section('content')

  @component('main.components.breadcrumbs', [
    'crumbs' => $breadcrumbs,
    'h1' => $page->getTranslatedAttribute('heading')
    ])
  @endcomponent

  <section class="bg-white text-gray-700 py-4">
    <article class="container mx-auto py-4 px-4">

      @isset($page->image)
        <img class="w-full sm:w-1/2 float-right" src="{{ Voyager::image( $page->image ) }}" alt="{{$page->getTranslatedAttribute('heading')}}">
      @endisset

      <div>
        {!!$page->getTranslatedAttribute('body')!!}

      </div>

      <div class="w-full my-6">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>

      {{-- youtube--}}
      @isset($page->youtube)
        <div class="px-4 flex justify-center">
    			<div class="rounded-lg shadow-xl p-4 w-full sm:w-1/2">
    				<iframe class="w-full" height="300" src="https://www.youtube-nocookie.com/embed/{{$page->youtube}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    			</div>
    		</div>
      @endisset
      {{-- end youtube--}}

          {{-- @isset($page->youtube)
            <div id="video">
              <h4 class="uk-heading-line"><span><span class="uk-text-muted uk-margin-right" uk-icon="icon: video-camera; ratio: 1.1"></h4>
              <iframe src="https://www.youtube-nocookie.com/embed/{{$page->youtube}}" width="100%" height="400" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
              <hr>
            </div>
          @endisset --}}




    </article>
  </section>


@endsection
