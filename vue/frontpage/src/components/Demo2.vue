<template>
    <span @click="clickFunc">测试Demo</span>
</template>

<script>
export default {
    name: 'Demo2',
    methods: {
        clickFunc(){
            console.log('触发点击事件');
            this.$emit('test');
        }
    }
}
</script>

<style>

</style>