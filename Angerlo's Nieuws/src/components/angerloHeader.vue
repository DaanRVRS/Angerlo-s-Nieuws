<template>
    <header>
      <div class="logo-container">
        <a href="/">
          <img class="header-logo" src="/angerlo-logo.png" alt="Angerlo logo">
        </a>
        <div class="vertical-devider"></div>
      </div>

      <nav>
        <ul>
          <router-link class="route" to="/laatste-nieuws">laatste nieuws</router-link>
          <router-link class="route" to="/laatste-edities">Laatste edities</router-link>
          <router-link class="route" to="/contact">contact</router-link>
        </ul>
      </nav>

      <div class="account-container">
        <span>
          18°C
        </span>
        <button>Inloggen</button>
      </div>
    </header>
</template>

<script>
export default {
  data() {
    return {
      test: 'yoo',
      num: 0,
    };
  },
  methods: {
    clickfunction() {
      this.num ++;
    },
  },
};
</script>