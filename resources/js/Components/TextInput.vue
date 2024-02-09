<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input class="TextInput" v-model="model"
        ref="input" />
</template>


<style scoped>
.TextInput {
    border: 1px solid #e5e5e5;
    border-radius: 0.375rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    height: 30px;
    font-size: medium;
}

/* Focus styles */
.TextInput:focus {
    border-color: #5e7cff;
    outline: none;
}</style>
