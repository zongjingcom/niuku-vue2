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
  *, *::before, *::after {
      box-sizing: border-box;
  }
  body {
      margin: 0;
      padding: 0;
      text-align: left;
      background-color: #fff;
  }
  #app {
    font-family: "Helvetica Neue",Helvetica,"PingFang SC","Hiragino Sans GB","Microsoft YaHei","微软雅黑",Arial,sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #2c3e50;
  }
</style>
