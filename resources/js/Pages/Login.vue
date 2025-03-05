<template>
    <div>
        <h1>Login</h1>
        <form @submit.prevent="login">
            <input v-model="form.email" type="email" placeholder="Email" required>
            <input v-model="form.password" type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</template>

<script setup>
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';

const form = reactive({
    email: '',
    password: ''
});

const login = () => {
    router.post('/login', form);
};
</script>
