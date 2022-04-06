<template>
  <header>
    <nav class="px-3 py-2 navbar-expand-lg navbar-dark bg-blue shadow">
      <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center justify-content-between">
          <router-link class="navbar-brand d-flex align-items-center" to="/">
            <img
              src="https://media-exp1.licdn.com/dms/image/C4D0BAQErbNlWeMNGDQ/company-logo_200_200/0/1600963347198?e=2147483647&v=beta&t=iCT0IsyKEFzWfD8UVakBIw2gnvexl22-hSCUT-HTLn4"
              width="50"
              class="d-inline-block align-top img-fluid mr-3"
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
          </div>
        </div>
        <div class="d-flex justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-boolean" href="/admin">Login</a>
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

<style lang="scss">
.bg-blue {
  background-color: #001534;
  border-bottom: 3px solid #00c053;
}
</style>