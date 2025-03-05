<template>
    <div>
        <h1>Welcome to Home Page</h1>
        <button @click="logout">Logout</button>
    </div>
</template>

<script>
export default {
    methods: {
        logout() {
            // Send a POST request to the logout route
            this.$inertia.post('/logout')
                .then(() => {
                    // Optionally handle any logic after successful logout
                })
                .catch(error => {
                    console.error('Logout failed:', error);
                });
        }
    }
}
</script>

<style scoped>
/* Add your styles here if needed */
</style>
