<template>
    <Layout>
        <div class="Books">
            <h1 class="Books-PageTitle">Books</h1>
            <div class="Books-List">
                <book v-for="book in books.data" :key="book.id" :book="book" />
            </div>

            <!-- Pagination links -->
            <div class="Links">
                <Link v-if="books.prev_page_url" :href="books.prev_page_url" class="Link">Previous</Link>
                <Link v-if="books.next_page_url" :href="books.next_page_url" class="Link">Next</Link>
            </div>
        </div>
    </Layout>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import Book from '../Components/Book.vue';
import Layout from '../Layouts/Layout.vue';

export default {
    props: {
        books: Object, // Inertia.js injects the data as a prop
    },
    components: {
        Layout,
        Book,
        Link
    }
};
</script>

<style>
.Books {
    .Books-PageTitle {
        font-size: 32px;
        color: white;
        font-weight: 200;
    }

    .Books-List {
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

