<template>
    <h1>Hello World</h1>
    <h2>{{ data }}</h2>
</template>

<script>
import axios from "axios";

export default {
    name: 'App',
    data(){
      return {
        data:''
      }
    },
    async mounted() {
        const url = "/api/books";
        const response = await axios.get(url);
        console.log(response.data);
        this.data = response.data;
    }
}
</script>