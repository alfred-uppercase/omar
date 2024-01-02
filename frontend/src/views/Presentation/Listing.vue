
<template>
  <div>
    <h1>Résultats de la recherche</h1>
    <ul>
      <li v-for="result in results" :key="result.id">{{ result.name }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ['results'], // Propriété pour recevoir les résultats de la recherche
};
</script>

<style scoped>
/* Styles spécifiques au composant */
</style>
