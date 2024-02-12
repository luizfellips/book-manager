<template>
    <Layout>
        <div class="ShowBook">
            <h1 class="ShowBook-PageTitle">{{ book.name }}</h1>
            <div class="Flex">
                <div class="column">
                    <img src="../../../public/img/placeholder.png" alt="">
                </div>
                <div class="content">
                    <h2 class="ShowBook-Author">Author: {{ book.author }}</h2>
                    <h2 class="ShowBook-ReleaseDate">Release date: {{ book.release_date }}</h2>
                </div>
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
        book: Object, // Inertia.js injects the data as a prop
    },
    components: {
        Layout,
        Book,
        Link
    }
};
</script>

<style scoped>
.ShowBook {
    display: flex;
    flex-direction: column;

    .Flex {
        display: flex;
    }

    .ShowBook-PageTitle {
        font-size: 32px;
        color: white;
        font-weight: 200;
        width: 100%;
    }


    img {
        width: 100%;
    }

    .column {
        width: 50%;
    }
    .content {
        color: white;
        padding: 20px;
        margin-top: 10px;

        .ShowBook-Author, .ShowBook-ReleaseDate {
            padding-bottom: 15px;
        }
    }
}
</style>

