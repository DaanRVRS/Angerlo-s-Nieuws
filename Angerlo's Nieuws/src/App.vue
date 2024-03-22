<template>
  <angerloHeader />
  <backButton />
  <router-view />
</template>

<script setup>
import angerloHeader from './components/angerloHeader.vue';
import backButton from './components/backButton.vue';

const app = {
  data() {
    return {
      test: 'yoo',
    };
  },
  methods: {},
};
</script>