@extends('main.app')

@section('head')
@component('main.components.meta')

  @slot('title') {{__('seo.portfolio-title')}} @endslot
  @slot('description') {{__('seo.portfolio-description', [
                        'phone' => setting('site.phone'),
                        'schedule' => setting('site.schedule'),
                        ])}}
  @endslot
  @slot('image') /portfolio.png @endslot
  @slot('date') {{config('app.startdate')}} @endslot

@endcomponent
@endsection

@section('content')

  @component('main.components.breadcrumbs', [
    'crumbs' => [
        ['', __('site.completed-projects')],
      ],
    'h1' => __('site.completed-projects')
    ])
  @endcomponent

  <section class="text-gray-700 pt-2">
    <article class="container mx-auto py-4 px-2">
      <div class="flex flex-wrap">
        <div class="w-full sm:w-1/2 px-6">
          <blockquote class="text-xl">
            {!!__('seo.portfolio-body')!!}
          </blockquote>
        </div>
        <div class="w-full sm:w-1/2 p-6 pt-0 mb-9">
              <svg class="w-full sm:h-64 mx-auto" viewBox="0 0 888.244 478.033" width="888.244" height="478.033">
              <path d="M192 477h-2a94 94 0 00-188 0H0a96 96 0 01192 0zM888 477h-2a94 94 0 10-188 0h-2a96 96 0 11192 0zM653 248h-2c0-94.841-77.16-172-172-172-94.841 0-172 77.159-172 172h-2c0-95.944 78.056-174 174-174s174 78.056 174 174z" fill="#3f3d56"/>
              <circle cx="145.5" cy="39.5" r="39.5" fill="#ff6584"/>
              <path fill="#3f3d56" d="M153.891 311.384l67.861-80.817h133.419l81.534 79.416-1.647 1.059h.588v165.185H153.984V311.042l-.093.342z"/>
              <path fill="#3f3d56" d="M210.102 276.248H194.72V223h15.383z"/>
              <path fill="#1facb9" d="M220.694 229.508l83.651 98.073v148.646H153.984V308.924l66.71-79.416z"/>
              <path fill="#3f3d56" d="M254.306 347.044h30.708v31.398h-30.708zM254.306 389.767h30.708v31.398h-30.708z"/>
              <path fill="#fff" d="M254.306 347.044h30.708v31.398h-30.708zM254.306 389.767h30.708v31.398h-30.708z"/>
              <path fill="#3f3d56" d="M211.838 347.044h30.708v31.398h-30.708zM211.838 389.767h30.708v31.398h-30.708z"/>
              <path fill="#fff" d="M211.838 347.044h30.708v31.398h-30.708zM211.838 389.767h30.708v31.398h-30.708z"/>
              <path fill="#3f3d56" d="M169.369 347.044h30.708v31.398h-30.708zM169.369 389.767h30.708v31.398h-30.708z"/>
              <path fill="#fff" d="M169.369 347.044h30.708v31.398h-30.708zM169.369 389.767h30.708v31.398h-30.708z"/>
              <path fill="#1facb9" d="M485 40h14v35h-14z"/>
              <path fill="#1facb9" d="M379 72h119v405H379z"/>
              <path fill="#3f3d56" d="M498 72h48v405h-48z"/>
              <path fill="#fff" d="M400.5 107h18v18h-18zM429.5 107h18v18h-18zM458.5 107h18v18h-18zM401 148h18v18h-18zM430 148h18v18h-18zM459 148h18v18h-18zM401.5 189h18v18h-18zM430.5 189h18v18h-18zM459.5 189h18v18h-18zM402 230h18v18h-18zM431 230h18v18h-18zM460 230h18v18h-18zM402.5 271h18v18h-18zM431.5 271h18v18h-18zM460.5 271h18v18h-18zM403 312h18v18h-18zM432 312h18v18h-18zM461 312h18v18h-18zM403.5 353h18v18h-18zM432.5 353h18v18h-18zM461.5 353h18v18h-18zM404 394h18v18h-18zM433 394h18v18h-18zM433 442h18v34h-18zM462 394h18v18h-18z"/>
              <path fill="#3f3d56" d="M498 40h8v34h-8z"/>
              <path fill="#1facb9" d="M635 218h14v20.744h-14z"/>
              <path fill="#1facb9" d="M529 236.966h119V477H529z"/>
              <path fill="#3f3d56" d="M648 236.966h48V477h-48z"/>
              <path fill="#fff" d="M552.5 271h18v18h-18zM581.5 271h18v18h-18zM610.5 271h18v18h-18zM553 312h18v18h-18zM582 312h18v18h-18zM611 312h18v18h-18zM553.5 353h18v18h-18zM582.5 353h18v18h-18zM611.5 353h18v18h-18zM554 394h18v18h-18zM583 394h18v18h-18zM583 442h18v34h-18zM612 394h18v18h-18z"/>
              <path fill="#3f3d56" d="M648 218h8v20.151h-8zM.244 475.792h888v2.241h-888z"/>
              <circle cx="732.66" cy="404.041" r="26.041" fill="#1facb9"/>
              <path d="M752.03 386.648a26.043 26.043 0 01-43.39 27.56 26.043 26.043 0 1043.39-27.56z" opacity=".2"/>
              <path fill="#3f3d56" d="M732.731 404.041h.072l1.287 73.829h-2.718l1.359-73.829z"/>
              <path fill="#3f3d56" d="M736.873 443.116l.6 1.14-4.305 2.266-.6-1.14z"/>
              <circle cx="809.218" cy="365.599" r="39.599" fill="#1facb9"/>
              <path d="M838.675 339.15a39.602 39.602 0 01-65.984 41.91 39.603 39.603 0 1065.984-41.91z" opacity=".2"/>
              <path fill="#3f3d56" d="M809.327 365.599h.109l1.958 112.271h-4.134l2.067-112.271z"/>
              <path fill="#3f3d56" d="M815.625 425.02l.912 1.732-6.546 3.446-.912-1.732z"/>
              <circle cx="26.66" cy="403.041" r="26.041" fill="#1facb9"/>
              <path d="M46.03 385.648a26.043 26.043 0 01-43.391 27.56 26.043 26.043 0 1043.391-27.56z" opacity=".2"/>
              <path fill="#3f3d56" d="M26.731 403.041h.072l1.287 73.829h-2.718l1.359-73.829z"/>
              <path fill="#3f3d56" d="M30.873 442.116l.6 1.14-4.305 2.266-.6-1.14zM606.413 37.336l9.206-7.363c-7.151-.789-10.09 3.111-11.292 6.198-5.587-2.32-11.67.72-11.67.72l18.42 6.688a13.938 13.938 0 00-4.664-6.243zM144.413 74.336l9.206-7.363c-7.151-.789-10.09 3.111-11.292 6.198-5.587-2.32-11.67.72-11.67.72l18.42 6.688a13.938 13.938 0 00-4.664-6.243zM746.413 112.336l9.206-7.363c-7.151-.789-10.09 3.111-11.292 6.198-5.587-2.32-11.67.72-11.67.72l18.42 6.688a13.938 13.938 0 00-4.664-6.243zM220.413 54.336l9.206-7.363c-7.151-.789-10.09 3.111-11.292 6.198-5.587-2.32-11.67.72-11.67.72l18.42 6.688a13.938 13.938 0 00-4.664-6.243zM237.413 134.336l9.206-7.363c-7.151-.789-10.09 3.111-11.292 6.198-5.587-2.32-11.67.72-11.67.72l18.42 6.688a13.938 13.938 0 00-4.664-6.243zM595.413 176.336l9.206-7.363c-7.151-.789-10.09 3.111-11.292 6.198-5.587-2.32-11.67.72-11.67.72l18.42 6.688a13.938 13.938 0 00-4.664-6.243zM106 456H44v2h9.669v19h2v-19h37.662v19h2v-19H106v-2zM169 464a13.918 13.918 0 00-6.97 1.87A14.982 14.982 0 00137 477h45.95A13.99 13.99 0 00169 464zM406 464a13.918 13.918 0 00-6.97 1.87A14.982 14.982 0 00374 477h45.95A13.99 13.99 0 00406 464zM561 464a13.918 13.918 0 00-6.97 1.87A14.982 14.982 0 00529 477h45.95A13.99 13.99 0 00561 464zM765 464a13.918 13.918 0 00-6.97 1.87A14.982 14.982 0 00733 477h45.95A13.99 13.99 0 00765 464zM863 464a13.918 13.918 0 00-6.97 1.87A14.982 14.982 0 00831 477h45.95A13.99 13.99 0 00863 464zM129 407h-16v16h7.417v53.912h2V423H129v-16zM44.122 450.016h62v2h-62zM44.122 445.016h62v2h-62zM44.122 440.016h62v2h-62z"/>
            </svg>
          </div>
        </div>
    </article>
  </section>

  <section class="pb-8">
    <div class="container mx-auto flex flex-wrap pt-0 pb-12">
      {{-- <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        {{__('site.completed-projects')}}
      </h2>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div> --}}

      <div class="flex flex-wrap items-stretch place-items-stretch">

        @foreach ($projects as $project)
          @include('main.layouts.partials.modules.project')
        @endforeach

      </div>

    </div>
  </section>

  @include('main.layouts.partials.tr.bottom')

@endsection
