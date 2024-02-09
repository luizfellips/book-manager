<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="GuestLayout">
        <div>
            <Link href="/">
            <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </Link>
        </div>

        <div class="GuestSlot">
            <slot />
        </div>
    </div>
</template>


<style scoped>
.GuestLayout {
    min-width: 100vh;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 1.5rem;
    padding-top: 0;
}

.GuestSlot {
    width: 100%;
    max-width: 20rem;
    margin-top: 1.5rem;
    padding: 1.5rem;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    border-radius: 0.375rem;

}</style>
