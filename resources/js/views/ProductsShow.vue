<template>
    <div>
        <div class="flex justify-between">
            <div class="text-blue-400">
                < Back
            </div>
            <div>
                <router-link :to="'/product/' + product.id + '/edit'"
                             class="px-4 py-2 rounded text-sm text-green-500 border border-green-500 font-bold mr-2">
                    Edit
                </router-link>
                <a href="#" class="px-4 py-2 rounded text-sm text-red-500 border border-red-500 font-bold">Delete</a>
            </div>
        </div>
        <div>
            <div>VG</div>
            <p class="pl-5 text-xl">{{ product.name }}</p>
        </div>

        <p class="pt-6 text-gray-600 font-bold uppercase text-sm">Protein</p>
        <p class="pt-2 text-blue-400">{{product.protein}}</p>

        <p class="pt-6 text-gray-600 font-bold uppercase text-sm">Fat</p>
        <p class="pt-2 text-blue-400">{{product.fat}}</p>

        <p class="pt-6 text-gray-600 font-bold uppercase text-sm">Carbohydrate</p>
        <p class="pt-2 text-blue-400">{{product.carbohydrate}}</p>

    </div>

</template>

<script>
export default {
    name: "ProductsShow",

    mounted() {
        axios.get('/api/products/' + this.$route.params.id)
            .then(response => {
                this.product = response.data;
            })
            .catch(error => {

            });
    },

    data: function () {
        return {
            product: null,
        }
    }
}
</script>

<style scoped>

</style>
