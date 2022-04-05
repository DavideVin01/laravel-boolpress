<template>
  <section id="home">
    <PostsList />
  </section>
</template>

<script>
import PostsList from "../posts/PostsList.vue";
export default {
  name: "HomePage",
  components: {
    PostsList,
  },
};
</script>

<style>
</style>