<template>
    <nav class="Navigation">
        <h1 class="Navigation-Title">Book Manager</h1>
        <ul>
            <li v-for="item in navigationItems" :key="item.id">
                <inertia-link :href="item.url">{{ item.title }} </inertia-link>
            </li>
        </ul>
    </nav>
</template>

<script>
import axios from 'axios';

export default {

    data() {
        return {
            navigationItems: [],
        };
    },

    mounted() {
        this.fetchNavigationItems();
    },

    methods: {
        async fetchNavigationItems() {
            try {
                const response = await axios.get('/navigation-items');
                this.navigationItems = response.data;
            } catch (error) {
                console.error('Error fetching navigation items:', error);
            }
        },
    },
};
</script>

<style>
/* Add your styles for the navigation bar */
.Navigation {
    background-color: #333;
    color: white;
    padding-block: 15px;
    padding-inline: 20px;

    .Navigation-Title {
        font-size: 3em;
        padding-bottom: 5px;
        border-bottom: 1px white solid;
        width: 80%;
    }
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    padding-right: 25px;
    margin-left: 15px;
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>
