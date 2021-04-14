<section class="bg-white bg-right-top bg-no-repeat bg-100 lg:bg-50 bg-right-multigons">
  @include('main.layouts.partials.tr.top')

  <div class="align-middle">
      <h2 class="w-full my-2 text-3xl sm:text-5xl font-bold leading-tight text-center text-gray-800">
      {{__('site.our-services')}}
    </h2>
    <div class="w-full mb-4">
      <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
  </div>

  <div class="container flex flex-wrap justify-center max-w-6xl my-12 mx-auto mx-8">

    @foreach ($solutions as $indx => $solution)

      @include('main.layouts.partials.modules.service')

    @endforeach

  </div>

  @include('main.layouts.partials.tr.bottom')

</section>
