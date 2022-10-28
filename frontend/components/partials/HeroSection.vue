<template>
  <div>
    <nuxt-link
      to="/shop"
      class="bg-primary-500 hover:bg-primary-600 rounded-full inline-flex p-1 items-center justify-center mt-5"
	  style="float: right;"
    >
      <div
        class="bg-white rounded-full h-7 md:h-10 w-7 md:w-10 flex items-center justify-center"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4 text-primary-500"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
          />
        </svg>
      </div>
      <span
        class="text-xs uppercase font-medium text-white tracking-widest ml-4 pr-6"
        >Booking Now</span
      >
    </nuxt-link>
  <div class="hero bg-primary-50 py-7 lg:py-20 container-bg">
    <div class="container flex flex-col lg:flex-row">
      <!-- left side -->
      <div
        class="lg:w-1/2 flex flex-col items-center lg:items-start lg:justify-center"
        style="width: 100%"
      >
      <div class="flex items-center">
          <div class="h-3 w-3 bg-primary-500"></div>
          <p class="text-sm ml-2 font-medium">Get 100% happiness!</p>
        </div>
        <h3 class="font-bold text-4xl md:text-5xl lg:text-6xl mt-4">
          Express your love with our packages!
        </h3>
		
        <!-- purchase button -->
      </div>

      <!-- right side -->
    </div>
    <div
      class="lg:w-1/2 flex justify-center items-center mt-14 lg:mt-0"
      style="width: 100%"
    >
      <!-- image -->
      <img src="images/banners/w6.jpeg" class="h-64 md:h-80 lg:h-96" alt="" />
    </div>
  </div>
</div>

</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
img {
  max-width: 100%;
  height: auto;
  object-fit: cover;
  margin-bottom: 15px;
  margin-top: 5px;
}
.container-bg {
  // background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFsOqyH0JCz8lB-8yasVZvJTc4DhMekCvQQA&usqp=CAU);
}
h3 {
  font-style: italic;
  color: #a052a5;
}
</style>
