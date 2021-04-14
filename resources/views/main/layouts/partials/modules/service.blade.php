{{-- <a href="#"> --}}
  <div class="w-full sm:w-1/2 lg:w-1/3 p-2 h-64 hover:border-4 border-gray-700 gradient--hovered">
    <a href="#" class="w-full h-full shadow-xl flex flex-wrap justify-left items-left content-end bg-cover bg-center"
    :style="'background-image:url({{ Voyager::image( $solution->image ) }});'"
    >
      <div class="w-3/4 text-white bg-gray-700 text-lg text-left font-bold my-6 px-6">
        {{$solution->getTranslatedAttribute('title')}}
      </div>
    </a>
  </div>

{{-- </a> --}}
