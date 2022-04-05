<template>
  <div class="card">
    <div>
      <h5 class="card-header">{{ post.author.name }} - {{ updatedAt }}</h5>
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ post.title }}</h5>
      <p class="card-text">{{ post.content }}</p>
    </div>
    <div class="card-footer d-flex justify-content-between align-items-center">
      <div
        :class="`badge badge-pill badge-${post.category.color} shadow-sm pt-1 text-uppercase px-5 mb-0`"
      >
        {{ post.category.label }}
      </div>
      <div v-if="post.tags.length">
        <div class="d-flex">
          <div v-for="tag in post.tags" :key="tag.id">
            <span
              class="badge shadow-sm px-2 mx-1 pt-1 text-white"
              :style="`background-color: ${tag.color}`"
              >{{ tag.label }}</span
            >
          </div>
        </div>
      </div>
      <div
        v-else
        class="badge shadow-sm px-3 mx-1 pt-1 text-white bg-secondary"
      >
        Empty
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PostCard",
  props: ["post"],
  computed: {
    updatedAt() {
      let date = new Date(this.post.updated_at);
      let day = date.getDate();
      let month = date.getMonth() + 1;
      let year = date.getFullYear();
      let hour = date.getHours();
      let minute = date.getMinutes();
      let seconds = date.getSeconds();

      if (day < 10) day = "0" + day;
      if (month < 10) month = "0" + month;
      if (minute < 10) minute = "0" + minute;
      if (seconds < 10) seconds = "0" + seconds;

      return `${day}/${month}/${year} ${hour}:${minute}:${seconds}`;
    },
  },
};
</script>

<style>
</style>