<template>
    <div>
        <Navigation />
        <ContentWrapper>
            <slot></slot>
        </ContentWrapper>
    </div>
</template>

<script>
import Navigation from '../Components/Navigation.vue';
import ContentWrapper from './ContentWrapper.vue';

export default {
    components: {
    Navigation,
    ContentWrapper
},
};
</script>

<style>
</style>
