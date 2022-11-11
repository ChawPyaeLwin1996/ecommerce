<template>
  <div class="bg-white py-10">
    <div class="container">
      <!-- section header -->
      <section-header>
        <template #title>Featured Packages </template>
        <template #subtitle>
			You can choose which you want to do with your love!
        </template>
      </section-header>

      <!-- blogs -->
      <div class="grid md:grid-cols-3 gap-7 mt-10">
        <div class="" v-for="(blog, index) in packages" :key="index">
          <blog-card :blog="blog"></blog-card>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  computed: {
    ...mapGetters({
      packages: "global/getPackages",
    }),
  },
  methods: {
  
  },
  data() {
    return {
      package_data: [],
      blogs: [
        {
          title: "Pure is the most healthy and most nourishing food",
          subtitle:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          image: "/images/blogs/blog-1.jpg",
          author: "John Doe",
          date: "May 12, 2020",
          category: "Marketing",
        },
        {
          title: "Pure is the most healthy and most nourishing food",
          subtitle:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          image: "/images/blogs/blog-2.jpg",
          author: "John Doe",
          date: "May 12, 2020",
          category: "Health",
        },
        {
          title: "Pure is the most healthy and most nourishing food",
          subtitle:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          image: "/images/blogs/blog-3.jpg",
          author: "John Doe",
          date: "May 12, 2020",
          category: "Promotion",
        },
      ],
    };
  },
};
</script>

<style lang="scss" scoped></style>
