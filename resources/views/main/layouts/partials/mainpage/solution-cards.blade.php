<section class="bg-white bg-right-top bg-no-repeat bg-100 lg:bg-50 bg-right-multigons py-16">
  <div class="container max-w-6xl mx-auto m-8">
    <p class="w-full my-2 text-3xl sm:text-5xl font-bold leading-tight text-center text-gray-800">
      {{__('mainpage.ready-solutions')}}
    </p>
    <div class="w-full mb-4">
      <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>

    @foreach ($solutions as $indx => $solution)

    <div class="flex flex-wrap pt-8 @if ((($indx+1)%2) === 0 ) sm:flex-row flex-col-reverse  @endif">
      @if ((($indx+1)%2) === 0 )
        <div class="w-full sm:w-1/2 p-6 pt-0 mb-9">
          {!!$solution->image!!}
        </div>
      @endif
      <div class="w-full sm:w-1/2 p-6">
        <h2 class="text-2xl sm:text-3xl text-gray-800 font-bold leading-none mb-3">
          {{$solution->getTranslatedAttribute('title')}}
        </h2>
        <article class="text-gray-700">
          {!!$solution->getTranslatedAttribute('body')!!}
        </article>
        <div class="flex items-center justify-center">
          <a href="{{$solution->url}}">
            <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              {{__('site.readmore')}}
            </button>
          </a>
        </div>
      </div>
      @if ((($indx+1)%2) != 0 )
        <div class="w-full sm:w-1/2 p-6 pt-0 mb-9">
          {!!$solution->image!!}
        </div>
      @endif
    </div>
    @endforeach

  </div>
</section>
