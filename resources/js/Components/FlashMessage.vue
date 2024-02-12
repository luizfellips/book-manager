<template>
    <div v-if="show" @click="hideElement">
        <p class="FlashMessage">{{ message }}</p>
    </div>
</template>

<script>
export default {
    props: {
        message: String,
    },

    data() {
        return {
            show: true,
        };
    },
    mounted() {
        setTimeout(() => {
            this.show = false;
        }, 2000);
    },
    methods: {
        hideElement() {
            this.show = false;
        },
    },
};
</script>

<style scoped>
.FlashMessage {
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    white-space: nowrap;
    box-shadow: 0px 4px 6px -1px rgba(0, 0, 0, 0.1), 0px 2px 4px -1px rgba(0, 0, 0, 0.06);
    border-radius: 0.75rem;
    background-color: #f810ab;
    color: #fff;
    padding-left: 12rem;
    padding-right: 12rem;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
}
</style>
