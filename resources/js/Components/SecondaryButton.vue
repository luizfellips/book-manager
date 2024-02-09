<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type" class="SecondaryButton">
        <slot />
    </button>
</template>

<style scoped>
.SecondaryButton {
    display: inline-flex;
    align-items: center;
    padding: 4px 8px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 0.375rem;
    font-weight: 600;
    font-size: 0.75rem;
    color: #4a5568;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    transition: background-color 0.15s ease-in-out, opacity 0.15s ease-in-out;
}

.SecondaryButton:hover {
    background-color: #edf2f7;
}

.SecondaryButton:focus {
    outline: none;
    box-shadow: 0 0 0 2px rgba(66, 153, 225, 0.5);
}

.SecondaryButton:disabled {
    opacity: 0.25;
}</style>
