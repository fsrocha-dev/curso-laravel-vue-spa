<template>
  <div>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
      <div class="container">
        <router-link :to="{name: 'home'}" class="navbar-brand">Treclon</router-link>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto"></ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <router-link :to="{ name: 'login' }" class="nav-link" v-if="!isLoggedIn">Login</router-link>
            <router-link :to="{ name: 'register' }" class="nav-link" v-if="!isLoggedIn">Register</router-link>
            <li class="nav-link" v-if="isLoggedIn">Hi, {{name}}</li>
            <router-link :to="{ name: 'board' }" class="nav-link" v-if="isLoggedIn">Board</router-link>
            <li class="nav-link" v-if="isLoggedIn" @click="logout()">Logout</li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="py-4">
      <router-view></router-view>
    </main>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isLoggedIn: null,
      name: null
    };
  },
  methods: {
    logout() {
      localStorage.removeItem("user");
      localStorage.removeItem("user_id");
      localStorage.removeItem("jwt");
      this.$router.push({ name: "home" });
    }
  },
  mounted() {
    this.isLoggedIn = localStorage.getItem("jwt");
    this.name = localStorage.getItem("user");
  }
};
</script>

<style scoped>
.full-height {
  height: 100vh;
}
.flex-center {
  align-items: center;
  display: flex;
  justify-content: center;
}
.position-ref {
  position: relative;
}
.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}
.content {
  text-align: center;
}
.title {
  font-size: 60px;
}
.links > a {
  color: #636b6f;
  padding: 0 25px;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.1rem;
  text-decoration: none;
  text-transform: uppercase;
}
.m-b-md {
  margin-bottom: 30px;
  color: #000000;
}
</style>
