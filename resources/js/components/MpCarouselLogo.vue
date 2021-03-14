<template>
    <carousel
        :perPageCustom="[[500, 3], [768, 4], [1024, 6]]"
        :autoplayTimeout="4000"
        loop
        autoplay
        scrollPerPage
        >
      <template v-for="item in items">

        <slide class="flex items-center justify-center"
          >
            <div class="icon--slider">
              <img :alt="item.name"
                  class=""
                  :src="'/storage/' + item.image">
            </div>
        </slide>
      </template>

    </carousel>

</template>

<script>
import { Carousel, Slide } from 'vue-carousel';
export default {
  props: ['items'],
  components: { Carousel, Slide },
}

</script>

<style>
.icon--slider {
  margin-left: 20px;
  margin-right: 20px;
  opacity: 0.75;
}
.icon--slider:hover {
  opacity: 1;
}
</style>
