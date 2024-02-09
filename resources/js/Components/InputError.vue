<script setup>
defineProps({
    message: {
        type: String,
    },
});
</script>

<template>
    <div v-show="message">
        <p class="InputError">
            {{ message }}
        </p>
    </div>
</template>

<style scoped>
.InputError {
    font-size: 0.875rem;
    color: #e53e3e;

}
</style>
