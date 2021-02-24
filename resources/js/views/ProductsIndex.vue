<template>
<div>
    <div v-if="loading">Loading...</div>
    <div v-else>
        <div v-if="products.length === 0">
            <p>No product yet. <router-link to="/">Get Started</router-link></p>
        </div>

        <div v-for="product in products">

            <router-link :to="'/products/' + product.id"
                         class="flex items-center border-b border-gray-400 p-4 hover:bg-gray-100">

                <div class="pl-4">
                    <p class="text-blue-400 font-bold">Name: {{ product.name }}</p>
                    <p class="text-gray-600">Protein: {{ product.protein }}</p>
                    <p class="text-gray-600">Fat: {{ product.fat }}</p>
                    <p class="text-gray-600">Carbohydrate: {{ product.carbohydrate }}</p>
                </div>

            </router-link>

        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "ProductsIndex",

    mounted() {
        axios.get('/api/products')
        .then(response => {
            this.products = response.data;

            this.loading = false;
        })
        .catch(error => {
            this.loading = false;

            alert('Unable to fetch products.');
        });
    },
    data: function () {
        return {
            loading: true,
            products: null,
        }
    }
}
</script>

<style scoped>

</style>
