<template>
  <nav>
    <ul class="pagination">
      <li
        class="page-item"
        role="button"
        v-if="pagination.currentPage > 1"
        @click="$emit('on-page-change', pagination.currentPage - 1)"
      >
        <span class="page-link">Previous</span>
      </li>
      <li
        class="page-item"
        v-for="page in pagination.lastPage"
        :key="page"
        :class="{ active: page === pagination.currentPage }"
        @click="$emit('on-page-change', page)"
        role="button"
      >
        <span class="page-link">{{ page }}</span>
      </li>
      <li
        class="page-item"
        role="button"
        v-if="pagination.lastPage > pagination.currentPage"
        @click="$emit('on-page-change', pagination.currentPage + 1)"
      >
        <span class="page-link" href="#">Next</span>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: "Pagination",
  props: ["pagination"],
};
</script>

<style>
</style>