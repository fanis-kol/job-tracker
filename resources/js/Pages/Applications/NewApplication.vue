<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
</script>


<template>
    <AppLayout title="Applications">
        <div class="flex items-center justify-center min-h-screen flex-col">
            <h1 class="text-2xl font-bold mb-4">New Job Applications</h1>
            <form axion="/aplications" method="post">
                <label for="title">Title</label><br>
                <input type="text" id="title" name="title"><br>
                <label for="description">Description</label><br>
                <textarea id="description" name="description"></textarea><br>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit</button>
            </form>
        </div>
    </AppLayout>
</template>

<script>

</script>
