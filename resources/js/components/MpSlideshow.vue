<template>
    <carousel
        :perPage="1"
        :autoplayTimeout="3000"
        :paginationEnabled="false"
        loop
        autoplay
        >

      <slide v-for="slide in slides" :key="slide.id" class="pt-16 bg-cover lg:h-100 w-100"


      :style="'background-image:url(/storage/' + slide.image + ');'"
      >
        <div class="container flex flex-col py-32 px-3 mx-auto justify-center items-center">
            <div class="my-4 p-2 text-4xl text-center lg:text-5xl font-bold leading-tight bg-gray-700 bg-opacity-50">
              <h1 v-if="slide.order == 1">{{slide.title}}</h1>
              <h2 v-else>{{slide.title}}</h2>
            </div>
            <p class="leading-normal p-2 text-center text-xl mb-8 w-full lg:w-2/3 bg-gray-700 bg-opacity-50">
              {{slide.body}}
            </p>
            <p class="mx-auto">
              <template v-if="slide.order == 1">
                <phone-btn :title="$ml.get('setRequest')" color="bg-white text-gray-800"></phone-btn>
              </template>
              <template v-else>
                <a :href="getUrl(slide.url)">
                  <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-700 font-bold my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    {{$ml.get('readmore')}}
                  </button>
                </a>
              </template>
            </p>
        </div>
      </slide>
    </carousel>
</template>

<script>
import { Carousel, Slide } from 'vue-carousel';
export default {
  props: ['lang', 'slides'],
  components: { Carousel, Slide },
  methods: {
    getUrl (url) {
      let link = null;
        if (url) {
          if (this.lang == 'ru') {
             link = '/' + url;
          }
          else {
             link = '/' + this.lang + '/' + url;
          }
        }
       return link;
     },
  }

}

</script>
