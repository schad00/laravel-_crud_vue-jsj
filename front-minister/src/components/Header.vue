

<template>
  <div >
    <nav
      class="  shadow-md py-2 bg-white relative

 px-6 py-8 bg-bg-teal-500 
 md:flex md:justify-between md:items-center"
    >
      <div class="flex items-center justify-between">
        <router-link
          to="/"
          class="text-xl font-bold text-dark-100 md:text-2xl hover:text-indigo-400"
          >Logo
        </router-link>
        <!-- Mobile menu button -->
        <div @click="toggleNav" class="flex md:hidden">
          <button
            type="button"
            class="text-dark-100 hover:text-dark-400 focus:outline-none focus:text-dark-400"
          >
            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
              <path
                fill-rule="evenodd"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
              ></path>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
      <ul
        :class="showMenu ? 'flex' : 'hidden'"
        class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0"
      >
     <li class="text-dark-100 hover:text-indigo-400"><button
  type="button"
  class="shadow-md
 text-dark bg-gray-100 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
>Home</button>
</li>

        <li class="text-dark-100 hover:text-indigo-400"><button
  type="button"
  class="shadow-md
 text-dark bg-gray-100 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
>Contact</button>
</li>

       <li class="text-dark-100 hover:text-indigo-400"><button
  type="button"
  class="shadow-md
 text-dark bg-gray-100 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
>Appropos</button>
</li>
      


        <li>
          <div class="relative">
            <!-- Dropdown toggle button -->
            <button
              @click="show = !show"
              class="shadow-md text-dark bg-gray-100 hover:bg-white focus:ring-4
focus:outline-none  font-medium rounded-lg text-sm px-5
py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 
dark:focus:ring-blue-800 flex items-center text-dark-100 bg-dark-500
  focus:outline-none"
            >
              <span class="mr-4">Dropdown Menu</span>
              <svg
                class="w-5 h-5 text-dark-100"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                />
              </svg>
            </button>

            <!-- Dropdown menu -->
            <div
              v-show="show"
              class="py-2 mt-2 bg-gray-100 rounded-md shadow-xl lg:absolute lg:right-0 w-44"
            >
              <router-link
                to="/"
                class="block px-4 py-2 text-sm text-dark-100 hover:bg-indigo-400 hover:text-indigo-100"
              >
                Dropdown List 1
              </router-link>
              <router-link
                to="/"
                class="block px-4 py-2 text-sm text-dark-100 hover:bg-indigo-400 hover:text-indigo-100"
              >
                Dropdown List 2
              </router-link>
              <router-link
                to="/"
                class="block px-4 py-2 text-sm text-dark-100 hover:bg-indigo-400 hover:text-indigo-100"
              >
                Dropdown List 3
              </router-link>
            </div>
          </div>
        </li>
        <li class="text-gray-100 hover:text-dark-400">Product</li>
      </ul>
    </nav>
  </div>
  <!-- Jumbotron -->
  
<!-- Background image -->
 <!-- Background image -->
  <div class=" overflow-hidden bg-no-repeat bg-cover" style="
    background-position: 50%;
    background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
    height: 350px;
   

  "><!-- Jumbotron -->
<div class="text-center  text-gray-800 py-20 px-6" style=""
>
    <h1 class="text-5xl font-bold mt-0 mb-6">Heading</h1>
    <h3 class="text-3xl font-bold mb-8">Subeading</h3>
    <a class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Get started</a>
  </div>

  </div>

</template>
<script>
import { ref } from "vue";
export default {
  setup() {
    let showMenu = ref(false);
    let show = ref(false);
    const toggleNav = () => (showMenu.value = !showMenu.value);
    return { showMenu, show, toggleNav };
  },
};
</script>
