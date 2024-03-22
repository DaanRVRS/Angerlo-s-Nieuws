<template>
    <footer>

      <div class="contact">
        <div class="contact-title">Contact</div>
        <p>Tel: 0316-582617</p>
        <p>E-mail: info @angerlosnieuws.nl </p>
      </div>
      <div class="nieuws-container">
        <div class="nieuws-title">Angerlo's Nieuws</div>
        <ul>
          <router-link class="route" to="/laatste-nieuws">laatste nieuws</router-link>
          <router-link class="route" to="/laatste-edities">Laatste edities</router-link>
          <router-link class="route" to="/contact">contact</router-link>
        </ul>
      </div>  
      <div class="info-footer">
        <img class="footer-logo" src="/angerlo-logo.png" alt="Angerlo logo">
        <div class="info-container">
          <p>KVK: </p>
          <p>BTW: </p>
          <div class="info-title"> Angerlo’s Nieuws is ook verkrijgbaar bij: </div>
          <p>Kapsalon Judith | Lathum</p>
          <p>Bakkerij Ten Veen | Angerlo</p>
          <p>Spar De Molen | Giesbeek</p>
       </div>
      </div>
    </footer>
</template>

<script>
export default {
  data() {
    return {
    };
  },
  methods: {
  },
};
</script>