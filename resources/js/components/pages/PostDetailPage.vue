<template>
  <div id="post-detail">
    <h1>Dettaglio Post</h1>
    <Loader v-if="isLoading && !post" />
    <PostCard v-else :post="post" hide-link="true" show-image="false" />
  </div>
</template>

<script>
import Loader from "../Loader.vue";
import PostCard from "../posts/PostCard.vue";
export default {
  name: "PostDetailPage",
  data() {
    return {
      post: null,
      isLoading: false,
    };
  },
  components: {
    Loader,
    PostCard,
  },
  methods: {
    getPost() {
      this.isLoading = true;
      axios
        .get("http://localhost:8000/api/posts/" + this.$route.params.slug)
        .then((res) => {
          this.post = res.data;
        })
        .catch((err) => {
          console.error(err);
        })
        .then(() => {
          this.isLoading = false;
        });
    },
  },
  mounted() {
    this.getPost();
  },
};
</script>

<style>
</style>