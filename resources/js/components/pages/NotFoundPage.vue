<template>
  <div id="not-found">
    <h1>404 - Page Not Found</h1>
    <button class="btn btn-secondary" @click="$router.back()">Indietro</button>
  </div>
</template>

<script>
export default {
  name: "NotFoundPage",
};
</script>

<style>
#not-found {
  height: 80vh;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
</style>