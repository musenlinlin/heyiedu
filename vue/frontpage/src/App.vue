<template>
  <div id="app">
    <!-- <Demo/>
    <Xuancard/> -->
    <!-- <LoginIndex/> -->
    <Form/>
  </div>
</template>

<script>
import LoginIndex from './components/LoginIndex.vue'
import Demo from './components/Demo.vue'
import Xuancard from './components/Xuancard'
import Form from './components/Form'

export default {
  name: 'App',
  components: {
    LoginIndex,
    Demo,
    Xuancard,
    Form
  }
}
</script>

<style scoped>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  /* margin-top: 60px; */
}

</style>
