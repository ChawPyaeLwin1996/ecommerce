<template>
	<div class="bg-white py-10">
		<div class="container">
			<section-header>
				<template #title>
					Featured Packages
				</template>
				<template #subtitle>
					You can choose which you want to do with your love!
				</template>
			</section-header>
			<div class="grid xs:grid-cols-2 lg:grid-cols-4 gap-7 mt-10">
				<product-card v-for="(product, index) in packages" :key="index" :product="product"></product-card>
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
};
</script>

<style lang="scss" scoped>
</style>