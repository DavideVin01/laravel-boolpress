<template>
  <div id="loader" class="d-flex flex-column">
      <div>
        <div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-warning mx-3" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-danger" role="status">
            <span class="sr-only">Loading...</span>
        </div>
      </div>
<h3 class="text-white mt-3">Loading...</h3>
  </div>
</template>

<script>
export default {
    name: 'Loader',
}
</script>

<style>
#loader{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
}
</style>