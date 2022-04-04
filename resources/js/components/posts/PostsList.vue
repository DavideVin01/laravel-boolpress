<template>
  <section class="m-4">
      <h2>Posts</h2>
      <ul v-if="posts.length">
          <li v-for="post in posts" :key="post.id">{{post.title}}</li>
      </ul>
      <p v-else>Non ci sono post.</p>
  </section>
</template>

<script>
export default {
    name: "PostsList",
    data(){
        return{
            posts: [],
        }
    },
    methods: {
      getPosts(){
        axios.get('http://127.0.0.1:8000/api/posts').then((res) => {
          this.posts = res.data;
        }).catch((err) => {
          console.error(err);
        }).then(() => {
          console.log('Chiamata terminata');
        })
      }
    },
    mounted(){
        this.getPosts();
    }
}
</script>

<style>

</style>