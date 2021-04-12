<section class="bg-white bg-right-top bg-no-repeat bg-100 lg:bg-50 bg-right-multigons">
  @include('main.layouts.partials.tr.top')

  <div class="container flex flex-wrap max-w-6xl my-12 mx-auto mx-8">

    @foreach ($solutions as $indx => $solution)

      @include('main.layouts.partials.modules.service')

    @endforeach

  </div>

  @include('main.layouts.partials.tr.bottom')

</section>
