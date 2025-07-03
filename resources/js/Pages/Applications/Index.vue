<template>
  <div class="">
    <h1 class="text-2xl font-bold mb-4">Your Job Applications</h1>
    <ul>
      <li v-for="application in applications" :key="application.id" class="mb-2">
        <strong>{{ application.title }}</strong> at {{ application.company }} — Status: {{ application.status }}
      </li>
    </ul>
  </div>
</template>

<script setup>
defineProps({ applications: Array });
</script>
