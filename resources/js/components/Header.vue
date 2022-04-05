<template>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
      <div class="d-flex">
        <router-link class="navbar-brand d-flex align-items-center" to="/">
          <img
            src="https://www.freepngdesign.com/content/uploads/images/3d-letter-b-6679.png"
            width="75"
            class="d-inline-block align-top img-fluid"
            alt="Boolpress"
          />
          <div>{{ title }}</div>
        </router-link>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse d-flex justify-content-between"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <router-link class="nav-link" to="/"
                >Home <span class="sr-only">(current)</span></router-link
              >
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/contacts"
                >Contacts</router-link
              >
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/admin">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
export default {
  name: "Header",
  props: ["title"],
};
</script>

<style>
</style>