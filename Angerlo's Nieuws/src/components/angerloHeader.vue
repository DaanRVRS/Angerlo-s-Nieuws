<template>
    <header>
      <div class="logo-container">
        <img class="header-logo" src="/angerlo-logo.png" alt="Angerlo logo">
        <div class="vertical-devider"></div>
      </div>

      <nav>
        <ul>
          <li><a>Laatste nieuws</a></li>
          <li><a>Laatste edities</a></li>
          <li><a>AN supporter</a></li>
          <li><a>Contact</a></li>
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