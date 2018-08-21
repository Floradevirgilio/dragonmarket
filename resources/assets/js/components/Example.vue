<template>



                        <label for="" class="col-md-3">
                            Categoría
                        </label>
                        <div class="col-md-9">
                            <select2 :options="categories" v-model="Category" @input="getCategories">

                            </select2>
                        </div>


                        <label for="" class="col-md-3">
                            Producto:
                        </label>
                        <div class="col-md-9">
                            <select2 :options="products" v-model="Product">

                            </select2>
                        </div>



</template>

<script>
import axios from 'axios';
import VueAxios from 'vue-axios';

Vue.use(VueAxios, axios);
export default {
    mounted() {

        Vue.axios.get('GetCategories')
        .then((response)=>{
            this.categories = response.data;
        })
    },
    data: function(){
        return {
            Category: '0',
            Product: '0',
            categories:[],
            products : [],
        }
    },
    methods:
    {
        getProducts()
        {

                Vue.axios.get('GetProducts/'+this.Category)
                .then((response)=>{
                    this.products = response.data;
                })


        }
    }
}
</script>
