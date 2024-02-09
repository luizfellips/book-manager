
<template>
    <div class="Book">
        <div class="Data">
            <h2>{{ book.name }}</h2>
            <p>Author: {{ book.author }}</p>
            <p>Release date: {{ book.release_date }}</p>
        </div>
        <div class="Image">
            <img src="../../../public/img/placeholder.png" alt="">
        </div>

    </div>
</template>

<script>
export default {
    props: {
        book: {
            type: Object,
            required: true,
        },
    },
};
</script>

<style scoped>
.Book {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
    color: white;

    display: flex;
    justify-content: space-between;

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
</style>
