<template>
    <button v-if="this.$router.currentRoute.value.href !== '/'"
    class="btn btn-primary back-button" @click="returnHome()"><strong>Terug</strong></button>
</template>

<script>
export default {
  data() {
    return {
    };
  },
  methods: {
    returnHome: function() {
        this.$router.push('/');
    },
  },
};
</script>