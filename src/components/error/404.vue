<template>
  <div class="container">
    <el-row>
      <el-col :span="24">
        <div class="grid-content bg-purple-dark" >
          <section id="not-found" class="center margin-top-50 margin-bottom-25">
            <h2>404 <i class="icon-line-awesome-question-circle"></i></h2>
            <p>页面不见了～</p>
          </section>
        </div>
      </el-col>
    </el-row>
  </div>
</template>

<script>
export default {
  name: "error404",
  components: {},
};
</script>

<style lang="scss">
  #not-found {
    margin: 40px 0 80px 0;
    &.center {
      text-align: center;
    }
    h2 {
      text-align: center;
      font-size: 210px;
      line-height: 210px;
      font-weight: 500;
      letter-spacing: -8px;
    }
    p {
      text-align: center;
      font-size: 28px;
      line-height: 42px;
      display: inline-block;
      margin-top: 0px;
      color: #999;
    }
    i {
      color: #e0e0e0;
      font-size: 210px;
      top: 0;
      margin-left: -40px;
      position: relative;
    }
  }

  .not-found-search.intro-banner-search-form .intro-search-field {
    background: #f7f7f7;
    box-shadow: none;
  }

  .not-found-search.intro-banner-search-form {
    input {
      background: #f7f7f7;
      box-shadow: none;
    }
    background: #f7f7f7;
    box-shadow: none;
  }

  @media (max-width: 992px) {
    .not-found-search.intro-banner-search-form {
      background: #fff;
    }
  }

  @media (max-width: 767px) {
    #not-found {
      h2 {
        font-size: 110px;
        line-height: 110px;
      }
      p {
        font-size: 20px;
        line-height: 32px;
      }
      i {
        font-size: 120px;
        top: 5px;
        margin-left: 0;
      }
    }
    .not-found-search.intro-banner-search-form {
      margin-top: -30px;
    }
    
  }

</style>
