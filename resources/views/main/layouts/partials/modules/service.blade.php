{{-- <a href="#"> --}}
  <div class="w-full sm:w-1/2 lg:w-1/4 p-3">
    <a href="#" class="w-full h-full shadow-xl flex flex-col justify-center items-center border-1 border-gray-500 border-dashed border-opacity-50 bg-white">
      <div class="w-2/3 p-6 t--ptimary">
        {!!$solution->image!!}
      </div>
      <div class="w-full text-xl text-center font-bold text-gray-700 my-6 px-6">
        {{$solution->getTranslatedAttribute('title')}}
      </div>
    </a>
  </div>

{{-- </a> --}}
