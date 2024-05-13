<template>
    <div class="flex items-center justify-center h-screen bg-gray-200">
      <div class="bg-white p-8 rounded shadow-md">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Page not found</h1>
        <p class="text-gray-600">The page you are trying to reach no longer exists.</p>
        <br/>
        <router-link :to="{ name: 'app.dashboard'}" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-200">Go back home</router-link>
      </div>
    </div>
  </template>

  <script>
  export default {
    name: "NotFound",
  };
  </script>
