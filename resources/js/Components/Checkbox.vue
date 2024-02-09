<script setup>
import { computed } from 'vue';

const emit = defineEmits(['update:checked']);

const props = defineProps({
    checked: {
        type: [Array, Boolean],
        required: true,
    },
    value: {
        default: null,
    },
});

const proxyChecked = computed({
    get() {
        return props.checked;
    },

    set(val) {
        emit('update:checked', val);
    },
});
</script>

<template>
    <input type="checkbox" :value="value" v-model="proxyChecked" class="Checkbox" />
</template>

<style scoped>
.Checkbox {
    border-radius: 0.375rem;
    border: 1px solid #e2e8f0;
    color: #4f46e5;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}

.Checkbox:focus {
    outline: none;
    box-shadow: 0 0 0 2px rgba(66, 153, 225, 0.5);
}
</style>
