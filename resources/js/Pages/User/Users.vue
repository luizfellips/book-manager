<template>
    <Layout>
        <div class="Users">
            <h1 class="Users-PageTitle">Users</h1>
            <div class="Users-List">
                <user v-for="user in users.data" :key="user.id" :user="user" />
            </div>

            <!-- Pagination links -->
            <div class="Links">
                <Link v-if="users.prev_page_url" :href="users.prev_page_url" class="Link">Previous</Link>
                <Link v-if="users.next_page_url" :href="users.next_page_url" class="Link">Next</Link>
            </div>
        </div>
    </Layout>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import User from '../../Components/User.vue';
import Layout from '../../Layouts/Layout.vue';

export default {
    props: {
        users: Object, // Inertia.js injects the data as a prop
    },
    components: {
        Layout,
        User,
        Link
    }
};
</script>

<style>
.Users {
    .Users-PageTitle {
        font-size: 32px;
        color: white;
        font-weight: 200;
    }

    .Users-List {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 15px;
    }

    .Links {
        margin-top: 15px;
        height: 100%;
        padding-block: 15px;
        display: flex;
        justify-content: flex-start;

        .Link {
            border-radius: 10px;
            padding: 15px;
            margin-inline: 15px;
            text-decoration: none;
            color: rgb(255, 255, 255);
            transition: 0.3s;
        }

        .Link:hover {
            background-color: rgb(156, 148, 255);
        }
    }

}
</style>

