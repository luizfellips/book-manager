<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Layout from '@/Layouts/Layout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Admin" />

    <Layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Admin Panel</h2>
        </template>

        <div class="Admin">
            <div class="AdminPanel">
                <section class="Column">
                    <h2>Manage Users</h2>
                    <Link :href="route('admin.users.index')">
                    <PrimaryButton>Users</PrimaryButton>
                    </Link>
                </section>
                <section class="Column">
                    <h2>Manage Books</h2>
                    <Link :href="route('admin.index')">
                    <PrimaryButton>Books</PrimaryButton>
                    </Link>
                </section>
            </div>
            <div class="More">
                <h1>More Operations</h1>
                <Link :href="route('admin.index')">
                <PrimaryButton>Manage Pages</PrimaryButton>
                </Link>
            </div>
        </div>
    </Layout>
</template>

<style>
.Admin {
    display: flex;
    justify-content: space-between;
    padding-block: 2rem;
    background: #ffffff;
    border-radius: 12px;

    .AdminPanel {
        display: flex;
        justify-content: space-between;

        h2 {
            color: black;
            font-weight: 100;
        }

        .Column {
            padding-inline: 2rem;
        }
    }

    .More {
        border-inline-start: 1px black solid;
        padding-inline: 5rem;

        h1 {
            font-weight: 200;
        }

        h2 {
            font-weight: 100;
            font-size: 25px;
        }
    }
}
</style>
