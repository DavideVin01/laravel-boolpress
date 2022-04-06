<template>
  <div :class="`alert alert-${type || 'info'}`" role="alert">
    <div>
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