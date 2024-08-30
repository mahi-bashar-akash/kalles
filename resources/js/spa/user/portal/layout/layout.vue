<template>
    <TopHeader/>
    <Header/>
    <router-view/>
    <Footer/>
    <BottomFooter/>
</template>

<script>
import TopHeader from "./includes/top-header.vue";
import Header from "./includes/header.vue";
import Footer from "./includes/footer.vue";
import BottomFooter from "./includes/bottom-footer.vue";

export default {
    components: {
        TopHeader, Header, Footer, BottomFooter
    },
    data(){
        return {

        }
    },
    mounted() {

    },
    methods: {

    }
}

</script>
