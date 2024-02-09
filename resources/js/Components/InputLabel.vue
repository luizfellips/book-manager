<script setup>
defineProps({
    value: {
        type: String,
    },
});
</script>

<template>
    <label class="InputLabel">
        <span v-if="value">{{ value }}</span>
        <span v-else>
            <slot />
        </span>
    </label>
</template>

<style scoped>
.InputLabel {
    display: block;
    font-weight: 500;
    font-size: 0.875rem;
    color: #4a5568;
}</style>
