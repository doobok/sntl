<!--Footer-->
<footer class="">
  <div class="container mx-auto px-8">
    <div class="w-full flex flex-col md:flex-row py-6">
      <div class="flex-1 mb-6 text-black flex justify-center">
        <a class="no-underline hover:no-underline" href="{{route('mainpage')}}">
          <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 637.4 812.4" height="120" width="150">
            <path class="st0" fill="#ddd" d="M61.9 812.4v-15h88c8.4 0 12.7-3.1 12.7-9.3v-12.8c0-6.2-4.2-9.3-12.7-9.3H90.4c-5.8 0-10.6-.6-14.7-1.8-4-1.2-7.3-2.9-9.9-5-2.5-2.2-4.4-4.7-5.5-7.7-1.2-3-1.7-6.3-1.7-9.9v-5.9c0-3.6.6-7 1.7-9.9 1.2-3 3-5.5 5.5-7.7s5.8-3.8 9.9-5c4-1.2 8.9-1.8 14.7-1.8h85.7v15H90.4c-8.4 0-12.7 3.1-12.7 9.3v6.2c0 6.2 4.2 9.3 12.7 9.3h59.5c5.8 0 10.6.6 14.7 1.8 4 1.2 7.3 2.9 9.9 5 2.5 2.2 4.4 4.7 5.5 7.7 1.2 3 1.7 6.3 1.7 9.9V788c0 3.6-.6 7-1.7 9.9-1.2 3-3 5.5-5.5 7.7s-5.8 3.8-9.9 5c-4 1.2-8.9 1.8-14.7 1.8h-88zM322.1 812.4l-108-78.8v78.8h-16.7V711.1h16.5l100.8 75.2v-75.2h16.7v101.3h-9.3zM397.2 812.4v-86.3h-53.1v-15h123.8v15h-51.6v86.3h-19.1zM480.7 812.4V711.1H500v86.3h82.1v15H480.7z"/>
            <path fill="#eee" d="M535 421.1l102.4-102.4L318.7 0l-212 212 196.7 196.8-4.5 4.5-196.7-196.7L0 318.7l318.7 318.7 211.8-211.8-197.1-197.1 4.5-4.5z"/>
          </svg>
        </a>
      </div>
      <div class="flex-1">
        <ul class="list-reset mb-6 text-white">
          <li class="mt-2 inline-block mr-2 md:block md:mr-0">
            <span class="ml-1 mr-4 flex">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px" height="20px" fill="currentColor">
                <path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/>
              </svg>
              <span class="ml-2">{{__('site.global-address')}}</span>
            </span>
          </li>
          <li class="mt-2 inline-block mr-2 md:block md:mr-0">
            <span class="ml-1 mr-4 flex">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20px" height="20px" fill="currentColor">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
              </svg>
              <span class="ml-2"><a href="tel:+38{{preg_replace("/[^0-9]/", '', setting('site.phone'))}}">{{setting('site.phone')}}</a></span>
            </span>
          </li>
          <li class="mt-2 inline-block mr-2 md:block md:mr-0">
            <span class="ml-1 mr-4 flex">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px" height="20px" fill="currentColor">
                <path d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z"/>
              </svg>
              <span class="ml-2"><a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a></span>
            </span>
          </li>
        </ul>
      </div>
      {{-- <div class="flex-1">
        <p class="uppercase text-gray-500 md:mb-6">Social</p>
        <ul class="list-reset mb-6">
          <li class="mt-2 inline-block mr-2 md:block md:mr-0">
            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
          </li>
          <li class="mt-2 inline-block mr-2 md:block md:mr-0">
            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
          </li>
          <li class="mt-2 inline-block mr-2 md:block md:mr-0">
            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
          </li>
        </ul>
      </div> --}}
      <div class="flex-1">
        <ul class="list-reset mb-6">
          <li class="mt-2 inline-block mr-2 md:block md:mr-0">
            <a href="#" class="no-underline hover:underline text-white">{{__('site.sitemap')}}</a>
          </li>
          <li class="mt-2 inline-block mr-2 md:block md:mr-0">
            <a href="#" class="no-underline hover:underline text-white">{{__('site.policy')}}</a>
          </li>
        </ul>
      </div>
      <div class="flex-1 text-white">
        <div class="flex flex-wrap content-center justify-center">
          <div class="mx-1">
            <span class="mx-1">
              <a href="#" target="_blank" rel="nofollow">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20" fill="currentColor"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
              </a>
            </span>
          </div>
          <div class="mx-1">
            <span class="mx-1">
              <a href="#" target="_blank" rel="nofollow">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
              </a>
            </span>
          </div>
          <div class="mx-1">
            <span class="mx-1">
              <a href="#" target="_blank" rel="nofollow">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
              </a>
            </span>
          </div>
        </div>
      </div>
    </div>
    <p class="text-center text-gray-200 pb-2">{{ __('site.copyright') }} © {{ config('app.name') }} 2015 - {{ date("Y") }}</p>
  </div>
</footer>
