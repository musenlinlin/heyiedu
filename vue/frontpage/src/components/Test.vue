<template>
    <div>
        <el-button @click="getTest">api</el-button>
        <el-input type="textarea" v-model="textarea"></el-input>
        <el-image :src="url"></el-image>
    </div>
</template>

<script>
export default {
    data(){
        return {
            textarea: 'empty content',
            url: 'https://www.heyikaoyan.com/templets/yan/images/logo_haibaol.jpg'
        }
    },
    methods: {
        getTest(){
            this.axios.get('/test').then((response) => {
                console.log(response.data);
                this.textarea = response.data.name;
                this.url = response.data.ewm;
            }).catch((error) => {
                console.log(error);
            })
        }
    }
}
</script>

<style scoped>

</style>