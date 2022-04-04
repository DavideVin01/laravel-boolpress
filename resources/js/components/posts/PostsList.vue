<template>
  <section class="m-4">
      <h2>Posts</h2>
      <Loader v-if="isLoading"/>
      <div v-else>
        <ul v-if="posts.length">
            <li v-for="post in posts" :key="post.id">{{post.title}}</li>
        </ul>
        <p v-else>Non ci sono post.</p>
      </div>
  </section>
</template>

<script>
import Loader from '../Loader.vue';
export default {
    name: "PostsList",
    components: {
        Loader,
    },
    data(){
        return{
            posts: [],
            isLoading: false,
        };
    },
    methods: {
      getPosts(){
          this.isLoading = true;
        axios.get('http://127.0.0.1:8000/api/posts').then((res) => {
          this.posts = res.data;
        }).catch((err) => {
          console.error(err);
        }).then(() => {
          console.log('Chiamata terminata');
          this.isLoading = false;
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