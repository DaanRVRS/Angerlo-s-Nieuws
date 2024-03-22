<template>
  <angerloHeader />
  <backButton />
  <router-view />
  <angerloFooter />
</template>

<script setup>
import angerloHeader from './components/angerloHeader.vue';
import angerloFooter from './components/angerloFooter.vue';
import backButton from './components/backButton.vue';

const app = {
  data() {
    return {
    };
  },
  methods: {},
};
</script>