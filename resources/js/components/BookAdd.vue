<template>
    <input type="text" name="title" id="" v-model="book.title">
    <br>
    <label for="author">著者</label>
    <input type="text" name="author" id="" v-model="book.author">
    <br>
    <button v-on:click="send">送信</button>
    <h5>v-modelの確認</h5>
    <div>{{ book.title }}</div>
</template>

<script>

import axios from "axios";
export default {
    // 
    name: 'BookList',
    data(){
      return {
        // 入力フォームのデータを保存するオブジェクト
        // bookモデルで入力する内容と一致させる
        book:{
            title:'',
            author:'',
            publisher:'test',
            ISBN:'1111',
            summary:'test',
            genre:'test',
            available:true
        }
      }
    },
    methods: {
        // clickイベントの発火時に動作するメソッド
        async send(){
            const url = "/api/books";
            // axios.post('送信先のurl','データ')
            const response = await axios.post(url,this.book);
            console.log(response);
        }
    }
}
</script>