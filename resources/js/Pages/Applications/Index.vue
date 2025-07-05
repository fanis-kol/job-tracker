<template>
<div class="flex items-center justify-center min-h-screen flex-col">
    <h1 class="text-2xl font-bold mb-4">Your Job Applications</h1>
    <ul>
      <li v-for="application in applications" :key="application.id" class="mb-2">
        <strong>{{ application.title }}</strong> at {{ application.company }} — Status: {{ application.status }}
        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" @click="editStatus">Edit</button>
      </li>
    </ul>
  </div>
</template>

<script setup>

defineProps({ applications: Array });



</script>
