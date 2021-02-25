<template>
  <nav id="header" class="fixed w-full z-30 top-8 text-white">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
      <div class="pl-4 flex items-center">
        <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
          <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 650 650">
            <path
            class="plane-take-off"
            d="M535.01 421.14l102.42-102.42L318.72 0 106.67 212.05l196.74 196.74-4.51 4.51-196.74-196.74L0 318.72l318.72 318.71L530.5 425.65 333.36 228.51l4.51-4.51 197.14 197.14z"/>
          </svg>
          SNTL
        </a>
      </div>
      <div class="block lg:hidden pr-4">
        <button id="nav-toggle" class="flex items-center p-1 text-green-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
      <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
        <ul class="list-reset lg:flex justify-end flex-1 items-center">
          <li class="mr-3 menu--border">
            <a class="inline-block py-2 px-4 text-gray-700 font-bold no-underline text-lg" href="#">О нас</a>
          </li>
          <li class="mr-3">
            <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Услуги</a>
          </li>
          <li class="mr-3">
            <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Проэкты</a>
          </li>
          <li class="mr-3">
            <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Партнёры</a>
          </li>
          <li class="mr-3">
            <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Клиенты</a>
          </li>
          <li class="mr-3">
            <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Контакты</a>
          </li>
        </ul>

<div @mouseover="openLng = true" @mouseleave="leaveLng()" class="relative inline-block text-left">
  <div>
    <button @click="openLng = ! openLng" class="underline inline-flex items-center justify-center p-2 rounded-md text-gray-800 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-700 transition duration-150 ease-in-out">
      ru
      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </button>
  </div>

  <!--
    Dropdown panel, show/hide based on dropdown state.

    Entering: "transition ease-out duration-100"
      From: "transform opacity-0 scale-95"
      To: "transform opacity-100 scale-100"
    Leaving: "transition ease-in duration-75"
      From: "transform opacity-100 scale-100"
      To: "transform opacity-0 scale-95"
  -->
  <div v-show="openLng" class="origin-top-right absolute right-0 mt-0 w-auto rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">en</a>
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">ua</a>
    </div>
  </div>
</div>

        <!-- </div> -->
        <span id="navAction"></span>
        <!-- <button
          id="navAction"
          class="mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
        >
        ru
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        </button> -->

      </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
  </nav>
</template>

<script>
    export default {
      data(){
            return{
              openLng: false,
                // startOfPage: true,
            }
        },
        methods: {
          leaveLng() {
            console.log('leave');
            if (this.openLng) {
              setTimeout(() => {
                this.openLng = false;
              }, 1000);
            }
          }
        },
        mounted() {
          // default styles
          var scrollpos = window.scrollY;
          var header = document.getElementById("header");
          var navcontent = document.getElementById("nav-content");
          var navaction = document.getElementById("navAction");
          var brandname = document.getElementById("brandname");
          var toToggle = document.querySelectorAll(".toggleColour");

          document.addEventListener("scroll", function () {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;
            if (scrollpos > 35) {
              header.classList.add("bg-white");
              navaction.classList.remove("bg-white");
              navaction.classList.add("gradient");
              navaction.classList.remove("text-gray-800");
              navaction.classList.add("text-white");
              header.classList.remove("top-8");
              header.classList.add("top-0");
              header.classList.add("fixed");
              //Use to switch toggleColour colours
              for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("t--ptimary");
                toToggle[i].classList.remove("text-white");
              }
              header.classList.add("shadow");
              navcontent.classList.remove("bg-gray-100");
              navcontent.classList.add("bg-white");
            } else {
              header.classList.remove("bg-white");
              navaction.classList.remove("gradient");
              navaction.classList.add("bg-white");
              navaction.classList.remove("text-white");
              navaction.classList.add("text-gray-800");
              header.classList.remove("top-0");
              header.classList.add("top-8");
              header.classList.remove("fixed");
              //Use to switch toggleColour colours
              for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("text-white");
                toToggle[i].classList.remove("t--ptimary");
              }
              header.classList.remove("shadow");
              navcontent.classList.remove("bg-white");
              navcontent.classList.add("bg-gray-100");
            }
          });
          // dropdown menu
          var navMenuDiv = document.getElementById("nav-content");
          var navMenu = document.getElementById("nav-toggle");

          document.onclick = check;
          function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
              // click NOT on the menu
              if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                  navMenuDiv.classList.remove("hidden");
                } else {
                  navMenuDiv.classList.add("hidden");
                }
              } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
              }
            }
          }
          function checkParent(t, elm) {
            while (t.parentNode) {
              if (t == elm) {
                return true;
              }
              t = t.parentNode;
            }
            return false;
          }


            // document.addEventListener('scroll', e => {
            //   if (document.documentElement.scrollTop > 10) {
            //     this.startOfPage = false;
            //     console.log('NO start');
            //   } else {
            //     this.startOfPage = true;
            //     console.log('start');
            //   }
            // });
        },
        computed: {
          // logoColor() {
          //   if (this.startOfPage) {
          //     return 'text-white gradient';
          //   } else {
          //     return 'text-black white';
          //   }
          // }
        }


  }


</script>
