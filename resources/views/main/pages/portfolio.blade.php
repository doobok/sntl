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

  @component('main.components.breadcrumbs', [
    'crumbs' => [
        ['', __('site.portfolio')],
      ],
    'h1' => __('site.portfolio')
    ])
  @endcomponent

  <section class="bg-white text-gray-700 py-4">
    <article class="container mx-auto py-4 px-2">
      <div class="flex flex-wrap">
        <div class="w-full sm:w-1/2 p-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="w-full sm:w-1/2 p-6 pt-0 mb-9">
            <svg class="w-full sm:h-64 mx-auto" viewBox="0 0 801.921 597.457"><circle data-name="Ellipse 44" cx="436.314" cy="42" r="18.934" fill="#46ab9f"/><path data-name="Path 395" d="M434.438 49.223a1.964 1.964 0 01-1.182-.393l-.02-.016-4.45-3.404a1.977 1.977 0 012.406-3.138l2.882 2.21 6.81-8.886a1.977 1.977 0 012.772-.366l-.042.06.044-.06a1.979 1.979 0 01.365 2.773l-8.01 10.446a1.978 1.978 0 01-1.574.771z" fill="#fff"/><circle data-name="Ellipse 44" cx="436.314" cy="170" r="18.934" fill="#46ab9f"/><path data-name="Path 395" d="M434.438 177.223a1.964 1.964 0 01-1.182-.393l-.02-.016-4.45-3.404a1.977 1.977 0 112.406-3.138l2.882 2.21 6.81-8.886a1.977 1.977 0 012.772-.366l-.042.06.044-.06a1.979 1.979 0 01.365 2.773l-8.01 10.446a1.978 1.978 0 01-1.574.771z" fill="#fff"/><path d="M483.864 368.96a10.746 10.746 0 0112.21-11.066l17.34-34.023 9.799 17.256-17.97 29.663a10.804 10.804 0 01-21.379-1.83zM564.71 583.194l-13.609-.001-6.474-52.491 20.085.001-.002 52.491z" fill="#ffb7b7"/><path d="M568.18 596.385l-43.88-.001v-.555a17.08 17.08 0 0117.08-17.08l26.801.002z" fill="#2f2e41"/><path fill="#ffb7b7" d="M638.483 583.194l-13.609-.001-6.474-52.491 20.085.001-.002 52.491z"/><path d="M641.953 596.385l-43.88-.001v-.555a17.08 17.08 0 0117.08-17.08l26.801.002z" fill="#2f2e41"/><path d="M504.767 339.349l-5.941 9.901s9.901 0 11.882 14.852l7.92-9.901z" fill="#e5e5e5"/><path d="M608.732 318.556s15.843 41.586 18.813 67.33 7.921 94.064 7.921 94.064l9.902 88.123-27.724 3.96-11.882-89.113-26.734-88.123-5.94 88.123-4.952 80.202-25.744.99-1.98-83.172-10.891-105.946 5.94-50.498z" fill="#2f2e41"/><circle cx="564.176" cy="168.164" r="24.754" fill="#ffb7b7"/><path fill="#e5e5e5" d="M589.424 192.312l9.902 6.93 12.872 129.71-80.202 1.98 10.892-90.103 9.901-25.744 7.147-9.449 29.488-13.324z"/><path d="M591.405 285.386l3.03-89.567s5.881.453 7.861 3.424 34.656 8.91 34.656 8.91l-5.941 92.085s24.754 73.27 15.842 77.231-24.754 2.97-24.754 2.97zM543.383 273.999l10.503-60.365-23.375 15.808 5.94 43.567-4.95 29.704s-18.813 82.183-12.872 85.153 12.872 0 12.872 0l11.882-83.173z" fill="#2f2e41"/><path d="M537.442 227.462l-6.931 1.98-2.97 39.606-4.952 34.655-23.763 42.577s11.882-7.921 16.832 14.852l26.171-45.564zM584.898 144.58l4.668-1.87s-9.76-10.745-23.34-9.81l3.82-4.205s-9.336-3.738-17.823 6.073c-4.461 5.158-9.623 11.22-12.841 18.05h-5l2.087 4.593-7.302 4.594 7.495-.825a25.672 25.672 0 00-.203 7.62 9.86 9.86 0 003.61 6.45s5.789-11.983 5.789-13.852v4.672s4.668-4.205 4.668-7.008l2.546 3.27 1.273-5.139 15.701 5.14-2.546-4.205 9.76 1.401-3.82-5.139 15.112 21.221s8.653-24.024-3.654-31.032z" fill="#2f2e41"/><path d="M591.3 360.839a10.746 10.746 0 0114.124-8.485l23.616-30.009 6.262 18.83-23.386 25.61a10.804 10.804 0 01-20.617-5.946z" fill="#ffb7b7"/><path fill="#e5e5e5" d="M631.506 350.24l-8.911 10.892-11.882-20.793 4.95-8.911 15.843 18.812z"/><path d="M629.526 211.62l7.92-3.961s5.942 7.921 6.932 14.852 5.94 15.842 5.94 20.793 13.863 51.488 13.863 51.488l-31.685 64.36s-6.931-23.764-21.783-25.744l24.754-34.655-13.863-24.754z" fill="#2f2e41"/><path d="M800.921 596.996h-381a1 1 0 010-2h381a1 1 0 010 2z" fill="#cbcbcb"/><path d="M365 212H0v-84h365z" fill="#fff"/><path d="M52.678 155.774a3.556 3.556 0 000 7.113h259.66a3.556 3.556 0 000-7.113zM52.678 177.113a3.556 3.556 0 00-.015 7.113h164.16a3.556 3.556 0 100-7.113z" fill="#46ab9f"/><path d="M365 212H0v-84h365zM6 206h353v-72H6z" fill="#e5e5e5"/><path d="M365 340H0v-84h365z" fill="#fff"/><path d="M52.678 283.774a3.556 3.556 0 000 7.113h259.66a3.556 3.556 0 000-7.113zM52.678 305.113a3.556 3.556 0 00-.015 7.113h164.16a3.556 3.556 0 100-7.113z" fill="#e6e6e6"/><path d="M365 340H0v-84h365zM6 334h353v-72H6z" fill="#e5e5e5"/><path d="M368 84H3V0h365z" fill="#fff"/><path d="M55.678 27.774a3.556 3.556 0 000 7.113h259.66a3.556 3.556 0 000-7.113zM55.678 49.113a3.556 3.556 0 00-.015 7.113h164.16a3.556 3.556 0 100-7.113z" fill="#46ab9f"/><path d="M368 84H3V0h365zM9 78h353V6H9z" fill="#e5e5e5"/><path d="M739.248 597.457v-72.34s28.192 51.286 0 72.34z" fill="#f1f1f1"/><path d="M740.99 597.445l-53.29-48.922s56.845 13.916 53.29 48.922z" fill="#f1f1f1"/><circle data-name="Ellipse 44" cx="484.314" cy="347.846" r="18.934" fill="#46ab9f"/><path data-name="Path 395" d="M482.438 355.068a1.964 1.964 0 01-1.182-.392l-.02-.016-4.45-3.404a1.977 1.977 0 112.406-3.139l2.882 2.21 6.81-8.885a1.977 1.977 0 012.772-.366l-.042.06.044-.06a1.979 1.979 0 01.365 2.772l-8.01 10.447a1.978 1.978 0 01-1.574.771z" fill="#fff"/></svg>
          </div>
        </div>
    </article>
  </section>

  <section class="bg-white border-b py-8">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
      <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Выполненные проекты
      </h2>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>

      <div class="flex flex-wrap items-center place-items-auto">

        @foreach ($projects as $project)
          @include('main.layouts.partials.modules.project')
        @endforeach

      </div>

    </div>
  </section>





@endsection
