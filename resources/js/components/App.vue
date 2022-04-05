<template>
  <div>
    <Header />
    <div class="container">
      <PostsList />
    </div>
  </div>
</template>

<script>
import Header from "./Header.vue";
import HomePage from "./pages/HomePage.vue";
import PostsList from "./posts/PostsList.vue";
export default {
  name: "App",
  components: {
    Header,
    PostsList,
    HomePage,
  },
};
</script>

<style>
</style>