
<template>
    <Link class="Book" :href="route('books.show', {book: book.id})">
        <div class="Data">
            <h2>{{ book.name }}</h2>
            <p>Author: {{ book.author }}</p>
            <p>Release date: {{ book.release_date }}</p>
        </div>
        <div class="Image">
            <img src="../../../public/img/placeholder.png" alt="">
        </div>
    </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps(['book']);
</script>


<style scoped>
.Book {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
    color: white;
    cursor: pointer;
    text-decoration: none;

    display: flex;
    justify-content: space-between;
    transition: 0.2s;

    .Image {
        img {
            width: 200px;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
    }

    h2 {
        font-size: 2em;
    }
}

.Book:hover {
    transform: scaleY(1.05);
}
</style>
