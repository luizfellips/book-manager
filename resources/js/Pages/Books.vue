<template>
    <Layout>
        <div class="Books">
            <h1 class="Books-PageTitle">Books</h1>
            <ul>
                <li v-for="book in books.data" :key="book.id">
                    <h2>{{ book.name }}</h2>
                    <p>Author: {{ book.author }}</p>
                    <p>Release date: {{ book.release_date }}</p>
                </li>
            </ul>

            <!-- Pagination links -->
            <div class="Links">
                <inertia-link v-if="books.prev_page_url" :href="books.prev_page_url"
                    class="Link">Previous</inertia-link>
                <inertia-link v-if="books.next_page_url" :href="books.next_page_url" class="Link">Next</inertia-link>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '../Layouts/Layout.vue';

export default {
    props: {
        books: Object, // Inertia.js injects the data as a prop
    },
    components: { Layout }
};
</script>

<style>
.Books {
    font-family: Arial, Helvetica, sans-serif;

    .Books-PageTitle {
        font-size: 32px;
    }

    .Links {
        margin-top: 15px;
        height: 100%;
        padding-block: 15px;

        .Link {
            border: 1px black solid;
            padding: 15px;
            margin-inline: 15px;
            text-decoration: none;
            color: black;
            transition: 0.3s;
        }

        .Link:hover {
            background-color: rgb(142, 240, 215);
        }
    }

}
</style>

