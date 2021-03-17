<template>
  <div class="">
    <carousel
        :perPageCustom="[[300, 1], [768, 2], [1024, 3]]"
        autoplay
        :autoplayTimeout="5000"
        loop
        scrollPerPage
        >
      <template v-for="t in 10">

      <slide>
            <div class="py-6 px-3">
                <div class="bg-white shadow-xl rounded-lg overflow-hidden w--card">
                  <img src="/iq.jpg" alt="">
                    <div class="p-4">
                        <p class="text-regular text-gray-700">Монтаж СКС и оптоволоконной сети в бизнес центре IQ на Подоле</p>
                    </div>

                    <div class="flex p-4 border-t border-gray-300 text-gray-700">
                        <div class="flex-1 inline-flex items-center">
                            <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M17 1c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-12 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2zm13 5v10h-16v-10h16zm2-6h-2v1c0 1.103-.897 2-2 2s-2-.897-2-2v-1h-8v1c0 1.103-.897 2-2 2s-2-.897-2-2v-1h-2v18h20v-18zm4 3v19h-22v-2h20v-17h2zm-17 7h-2v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4h-2v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"/></path>
                            </svg>
                            <p><span class="text-gray-900 font-bold">2019</span></p>
                        </div>
                        <div class="flex-1 inline-flex items-center">
                          <a href="#">
                            <button class="hover:underline gradient text-white font-bold rounded-full my-1 py-3 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                              Подробнее
                            </button>
                          </a>
                        </div>
                    </div>

                </div>
            </div>
          </slide>
        </template>

        </carousel>

  </div>
</template>

<script>
import { Carousel, Slide } from 'vue-carousel';
export default {
  components: { Carousel, Slide },
data() {
    return {
      // currentOffset: 0,

    }
  },
  computed: {

  },
  methods: {

  }
}

</script>

<style>
.w--card {
  width: 340px;
}
</style>
