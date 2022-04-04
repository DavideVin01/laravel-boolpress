<template>
  <section class="m-4">
      <h2>Posts</h2>
      <Loader v-if="isLoading"/>
      <div v-else>
          <div v-if="posts.length">
              <div v-for="post in posts" :key="post.id">
            <PostCard :post="post" />
              </div>
          </div>
          <p v-else>Non ci sono post.</p>
      </div>
  </section>
</template>

<script>
import Loader from '../Loader.vue';
import PostCard from './PostCard.vue';
export default {
    name: "PostsList",
    components: {
        Loader,
        PostCard,
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

<style lang="scss" scoped>
    ul{
        li {
            list-style-type: none;
            border: 1px solid black;
        }
    }
</style>