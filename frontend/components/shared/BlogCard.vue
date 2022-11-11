<template>
	<div>
		<!-- blogs -->
		<div class="bg-white hover:border hover:border-gray-200 rounded-lg overflow-hidden mx-auto relative blog">
			<!-- image -->
			<div class="bg-white flex justify-center item-center product-image relative rounded-lg">
				<img :src="blog.image" class="h-full w-full" alt="product" style="object-fit: cover;">

				<!-- badge -->
				<div class="absolute bottom-3 left-3">
					<span class="blog-badge bg-primary-500 text-white text-xs px-5 py-1 rounded-full font-semibold">{{blog.name}}</span>
				</div>
			</div>

			<!-- details -->
			<div class="details p-4">
				<!-- author and date -->
				<div class="flex items-center mb-2">
					<!-- author -->
					<div class="flex items-center">
						<div class="w-4 h-4 rounded-full overflow-hidden border border-primary-500 cursor-pointer shadow-sm flex items-center justify-center">
							<img src="images/users/user-01.png" alt class="w-full h-full object-cover" />
						</div>
						<h6 class="text-gray-400 text-sm mb-0 ml-1 mt-1">{{blog.packageID}}</h6>
					</div>
				</div>

				<nuxt-link to="#" class="text-md font-bold blog-title">Price : {{blog.lessAmount}} ~ </nuxt-link>
				<nuxt-link to="#" class="text-md font-bold blog-title">{{blog.lessAmount}}</nuxt-link>
			
			</div>

		</div>
		<!-- End blogs -->

	</div>
</template>

<script>
export default {
	name: "BlogCard",
	props: {
		blog: {
			type: Object,
		},
	},
};
</script>

<style lang="scss" scoped>
.blog {
	box-shadow: #7c3aed15 0px 3px 8px;
}
.blog:hover {
	box-shadow: #7c3aed1b 0px 4px 12px;

	.blog-title {
		@apply underline;
	}
}
</style>
