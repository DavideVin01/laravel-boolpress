<template>
  <section>
    <h1>Post</h1>
    <Alert
      type="danger"
      v-if="isError && !isLoading"
      @on-close="isError = false"
    />
    <div class="my-3 d-flex justify-content-center">
      <Pagination
        :pagination="pagination"
        @on-page-change="getPosts"
        v-if="posts.length && !isLoading"
      />
    </div>
    <Loader v-if="isLoading" />
    <div v-else>
      <div v-if="posts.length" class="row">
        <div v-for="post in posts" :key="post.id" class="col-6">
          <PostCard :post="post" short-content="true" />
        </div>
      </div>
      <p v-else>Non ci sono post.</p>
    </div>
    <div class="my-3 d-flex justify-content-center">
      <Pagination
        :pagination="pagination"
        @on-page-change="getPosts"
        v-if="posts.length && !isLoading"
      />
    </div>
  </section>
</template>

<script>
import Loader from "../Loader.vue";
import Alert from "../Alert.vue";
import Pagination from "../Pagination.vue";
import PostCard from "./PostCard.vue";
export default {
  name: "PostsList",
  components: {
    Loader,
    PostCard,
    Pagination,
    Alert,
  },
  data() {
    return {
      posts: [],
      pagination: {},
      isError: false,
      isLoading: false,
    };
  },
  methods: {
    getPosts(page = 1) {
      this.isLoading = true;
      axios
        .get("http://localhost:8000/api/posts?page=" + page)
        .then((res) => {
          const { data, current_page, last_page } = res.data;

          this.posts = data;
          this.pagination = {
            lastPage: last_page,
            currentPage: current_page,
          };
        })
        .catch((err) => {
          console.error(err);
          this.isError = true;
        })
        .then(() => {
          console.log("Chiamata terminata");
          this.isLoading = false;
        });
    },
  },
  mounted() {
    this.getPosts();
  },
};
</script>

<style lang="scss" scoped>
ul {
  li {
    list-style-type: none;
    border: 1px solid black;
  }
}
</style>