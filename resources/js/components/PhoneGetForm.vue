<template>
  <div class="">

    <button @click="openModal = true" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
      Оставить заявку
    </button>

    <!--Modal-->
    <div v-show="openModal" class="z-50 fixed w-full h-full top-0 left-0 flex items-center justify-center">
      <div class="absolute w-full h-full bg-gray-900 opacity-50"></div>


      <div class="z-60 bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto text-gray-800">

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="py-4 text-left px-6">
          <!--Title-->
          <div class="flex justify-between items-start pb-3">
            <div>
              <p class="text-2xl font-bold">Оставьте контакт</p>
              <p class="text-xl font-bold pb-8">и мы Вам перезвоним</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="#46ab9f" d="M20.89 23.654c-7.367 3.367-18.802-18.86-11.601-22.615l2.107-1.039 3.492 6.817-2.083 1.026c-2.189 1.174 2.37 10.08 4.609 8.994.091-.041 2.057-1.007 2.064-1.011l3.522 6.795c-.008.004-1.989.978-2.11 1.033zm-9.438-2.264c-1.476 1.072-3.506 1.17-4.124.106-.47-.809-.311-1.728-.127-2.793.201-1.161.429-2.478-.295-3.71-1.219-2.076-3.897-1.983-5.906-.67l.956 1.463c.829-.542 1.784-.775 2.493-.609 1.653.388 1.151 2.526 1.03 3.229-.212 1.223-.45 2.61.337 3.968 1.243 2.143 4.579 2.076 6.836.316-.412-.407-.811-.843-1.2-1.3z"/></svg>
          </div>

          <div class="grid grid-cols-1 gap-6">
              <label class="block">
                <span class="text-gray-700">Как к Вам обращатся</span>
                <input type="text" class="mt-1 block w-full rounded-md border-green-300 shadow-sm">
              </label>
              <label class="block">
                <span class="text-gray-700">Номер телефона</span>
                <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
              </label>
            </div>

          <!--Footer-->
          <div class="flex justify-end pt-16">
            <button @click="close" class="px-4 bg-transparent p-3 rounded-lg hover:bg-gray-100 mr-2">Отмена</button>
            <button class="px-4 gradient p-3 rounded-lg text-white">Отправить</button>
          </div>

        </div>
      </div>
    </div>
  </div>

</template>

<script>

export default {
  // props: ['lang'],
  data(){
        return{
          openModal: true,
        }
    },
    methods: {
      close() {
        this.openModal = false;
      }
      // leaveLng() {
      //   if (this.openLng) {
      //     setTimeout(() => {
      //       this.openLng = false;
      //     }, 1000);
      //   }
      // }
    },
    mounted() {

    }
  }


</script>
