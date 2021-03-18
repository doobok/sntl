<section class="bg-white border-b py-8">
  <div class="antialiased font-sans pb-12">
  <div class="max-w-6xl mx-auto">
      <h2 class="container my-2 pt-4 text-3xl sm:text-5xl font-bold leading-tight text-center text-gray-800">
        Выполненные проекты
      </h2>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>

      <mp-cases lang="{{app()->getLocale()}}" :projects="{{$projects}}"></mp-cases>

      <div class="flex items-center justify-center pt-8">
        <a href="{{route('portfolio')}}">
          <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-6 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Посмотреть все проекты
          </button>
        </a>
      </div>

    </div>
  </div>
</section>
