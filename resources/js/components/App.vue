<template>
  <div>
    <Header />
    <div class="container">
      <PostsList />
    </div>
  </div>
</template>

<script>
import Header from './Header.vue';
import PostsList from './posts/PostsList.vue';
export default{
    name: "App",
    components: {
      Header,
      PostsList,
    },
    methods: {
      getPosts(){
        axios.get('http://127.0.0.1:8000/api/posts').then((res) => {
          $this.posts = res.data;
        }).catch((err) => {
          console.error(err);
        }).then(() => {
          console.log('Chiamata terminata');
        })
      }
    },
};
</script>

<style>

</style>