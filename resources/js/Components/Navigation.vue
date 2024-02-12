<template>
    <nav class="Navigation">
        <h1 class="Navigation-Title">
            <Link href="/">
            <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </Link>
            Laser
        </h1>
        <ul>
            <li v-for="item in navigationItems" :key="item.id">
                <Link :href="getRoute(item.route)" :method="getItemMethod(item.route)">{{
                    item.title }} </Link>
            </li>
        </ul>
    </nav>
</template>

<script>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
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
                const response = await axios.post(route('navigation'));
                this.navigationItems = response.data;
            }
            catch (error) {
                console.error('Error fetching navigation items:', error);
            }
        },
        getRoute(url) {
            return route(url);
        },

        getItemMethod(route) {
            return route === 'logout' ? 'post' : undefined;
        },
    },
    components: { Link, ApplicationLogo }
};
</script>

<style scoped>
/* Media query for screens with a maximum width of 768 pixels (typical for mobile devices) */
@media (max-width: 768px) {
    .Navigation {
        flex-direction: column;
        /* Stack items vertically on small screens */
        padding-inline: 20px;
        /* Adjust padding for better spacing on small screens */
    }

    .Navigation-Title {
        margin-bottom: 20px;
        /* Add some space between the title and the menu on small screens */
    }

    li {
        margin: 10px 0;
        /* Add space between menu items on small screens */
        padding-inline: 0 !important;

    }
}

.Navigation {
    background: rgb(92, 82, 255);
    background: linear-gradient(90deg, rgba(92, 82, 255, 1) 0%, rgba(118, 118, 255, 1) 35%, rgba(148, 85, 255, 1) 100%);
    color: white;
    padding-block: 45px;
    padding-inline: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;

    .Navigation-Title {
        font-size: 2em;
        margin: 0;
        font-weight: 100;
        display: flex;
        align-items: center;
        gap: 10px;
        user-select: none;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    li {
        padding-inline: 25px;
        float: left;
        user-select: none;
        cursor: pointer;
    }

    li a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        position: relative;
        text-decoration: none;
    }

    li a:after {
        content: "";
        display: block;
        height: 1px;
        position: absolute;
        background: #fff;
        left: 50%;
        transition: width 0.3s ease 0s, left 0.3s ease 0s;
        width: 0;
    }

    li a:hover:after {
        width: 100%;
        left: 0;
    }
}</style>
