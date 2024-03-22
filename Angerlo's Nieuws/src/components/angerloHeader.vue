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
          <li><a href="laatste-nieuws">Laatste nieuws</a></li>
          <li><a href="laatste-edities">Laatste edities</a></li>
          <li><a href="an-supporter">AN supporter</a></li>
          <li><a href="contact">Contact</a></li>
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