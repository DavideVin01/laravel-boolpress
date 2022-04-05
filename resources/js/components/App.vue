<template>
  <div>
    <Header :title="title" />
    <div class="mx-5">
      <div class="m-4">
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>

<script>
import Header from "./Header.vue";
export default {
  name: "App",
  data() {
    return {
      title: "Boolpress",
    };
  },
  components: {
    Header,
  },
};
</script>

<style>
</style>