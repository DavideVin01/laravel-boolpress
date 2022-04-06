<template>
  <div :class="`alert alert-${type || 'info'}`" role="alert">
    <div class="d-flex justify-content-between align-items-center">
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  name: "Alert",
  props: ["message", "type"],
};
</script>

<style>
</style>