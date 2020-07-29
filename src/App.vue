<template>
  <div id="app">
    <router-view></router-view>
  </div>
</template>

<script>
import '@/assets/scss/style.scss';
export default {
  name: 'app',
  components: {
  }
}
</script>

<style>
  #app {
    font-family: "Helvetica Neue",Helvetica,"PingFang SC","Hiragino Sans GB","Microsoft YaHei","微软雅黑",Arial,sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #2c3e50;
  }
</style>
