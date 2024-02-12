<template>
    <Layout>
        <Hero />
        <div class="Home">
            <FlashMessage v-if="message" :message="message" />
            <h1>Applications</h1>
            <div class="Applications">
                <div class="Application-Card">
                    <h2>Books</h2>
                    <p>Animi aperiam voluptatum quos, nisi temporibus assumenda obcaecati id.</p>
                </div>
                <div class="Application-Card">
                    <h2>Authors</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="Application-Card">
                    <h2>Categories</h2>
                    <p>In neque provident cupiditate ab omnis a mollitia eos? Earum quo architecto!</p>
                </div>
            </div>
        </div>
    </Layout>
</template>


<script>
import Hero from '../Components/Hero.vue';
import Layout from '../Layouts/Layout.vue';
import FlashMessage from '@/Components/FlashMessage.vue';


export default {
    props: {
        message: String,
    },
    components: { Layout, Hero, FlashMessage }
}
</script>

<style>
.Home {
    h1 {
        color: white;
        font-weight: 100;
    }



}

.Applications {
    display: flex;
    gap: 4rem;
    width: 100%;

    .Application-Card {
        border: 2px white solid;
        border-radius: 8px;
        padding: 10px;
        width: 170px;
        text-align: center;
        transition: 0.1s;
        cursor: pointer;
        background: white;
        display: flex;
        flex-direction: column;
        align-items: center;

        h2 {
            border-bottom: 1px solid black;
            text-align: center;
            padding-bottom: 5px;
        }

        h2,
        p {
            font-weight: 100;
            color: rgb(85, 85, 85);
            text-overflow: ellipsis;
            overflow: hidden;
            max-width: 150px;
        }
    }

    .Application-Card:hover {
        transform: scale(1.05);
    }
}
</style>
