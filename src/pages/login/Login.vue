<template>
  <div id="wrapper">
    <header id="header-container" class="fullwidth">
      <!-- Header -->
      <div id="header">
        <div class="container">
          <!-- Left Side Content -->
          <div class="left-side">
            <!-- Logo -->
            <div id="logo">
              <a href="/">
                <img src="@/assets/images/niuku-logo.png" alt="牛库" />
              </a>
            </div>
            <div class="headblock">
              <span class="slogan">互联网顶尖创新众包服务平台</span>
            </div>
            <div class="clearfix"></div>
            <!-- Main Navigation -->
          </div>
          <!-- Left Side Content / End -->

          <!-- Right Side Content / End -->
          <div class="right-side">
            <div class="header-widget">
              <div style="display:inline-block;line-height:82px;">
                还没注册账号？
              </div>
              <el-button type="primary">注册</el-button>
            </div>
          </div>
          <!-- Right Side Content / End -->
        </div>
      </div>
      <!-- Header / End -->
    </header>

    <div id="titlebar" class="gradient" style="margin-bottom:20px">
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="text-align: center">
            <h2>用户登录</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-md-5 col-sm-7" style="margin: 0 auto;">
          <div class="login-register-page">
            <div class="welcome-text">
              <h4>
                <b>欢迎访问牛库</b>
              </h4>
            </div>

            <form
              method="post"
              id="register-account-form"
              class="login-form validform"
              action="/"
            >
              <div class="el-form-item" title="请输入登录账号">
                <el-input
                  placeholder="用户名/邮箱/手机号码"
                  v-model="input_account"
                  clearable
                ></el-input>
              </div>

              <div
                class="el-form-item"
                title="请输入登录密码"
                style="margin-bottom: 10px;"
              >
                <el-input
                  placeholder="请输入登录密码"
                  v-model="input_pwd"
                  show-password
                ></el-input>
              </div>
              <div
                class="el-form-item"
                title="请输入登录密码"
                style="margin-bottom: 10px;"
              >
                <el-checkbox
                  v-model="checked_remember"
                  style="margin-left: 3px;"
                  >记住我</el-checkbox
                >
              </div>
              <div class="el-form-item">
                <el-button type="primary" @click="onSubmit" class="col">
                  登录
                  <i class="el-icon-arrow-right el-icon--right"></i>
                </el-button>
              </div>
            </form>
            <div class="clearfix side-by-side">
              <a href="http://kppw/register">免费注册</a>
              <a href="http://kppw/password/email" class="right">忘记密码？</a>
            </div>
            <div class="social-login-separator">
              <span>或</span>
            </div>
            <div class="social-login-buttons">
              <el-button class="qq-login ripple-effect">
                <i class="icon-brand-qq"></i>通过QQ登录
              </el-button>
              <el-button class="wechat-login ripple-effect">
                <i class="icon-brand-weixin"></i>通过微信登录
              </el-button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "login",
  components: {},
  data() {
    return {
      input_account: "",
      input_pwd: "",
      checked_remember: "",
    };
  },
  methods: {
    onSubmit() {
      console.log("submit!");
    },
  },
};
</script>

<style lang="scss" scoped>

.headblock {
  display: inline-block;
  height: 100%;
  line-height: 82px;
  font-size: 14px;
}
@media (max-width: 1099px){
  header.fullwidth .container {
    padding: 0 20px;
  }
  .headblock {
      display: none;
  }
  #titlebar {
    padding-top: 20px;
  }
}
/* Welcome Text */
.welcome-text {
  display: block;
  text-align: center;
  color: #808080;
  margin-bottom: 33px;
  h3 {
    display: block;
    font-weight: 700;
    color: #333;
    font-size: 24px;
  }
  span {
    a {
      font-weight: 500;
    }
    display: block;
    margin-top: 4px;
  }
}
.side-by-side {
  display: flex;
  align-items: center;
  .right {
    flex-grow: 1;
    text-align: right;
  }
}
/* Social Login Separator */

.social-login-separator {
  width: 100%;
  display: block;
  text-align: center;
  position: relative;
  width: 100%;
  margin: 38px 0 15px 0;
  height: 1px;
  &:before {
    width: 100%;
    content: "";
    height: 1px;
    display: block;
    background-color: #e0e0e0;
    position: absolute;
    top: 0;
  }
  span {
    background-color: #fff;
    top: 0;
    position: absolute;
    line-height: 10px;
    top: -5px;
    margin-left: -15px;
    padding: 0px 10px;
    color: #808080;
  }
}

/* Social Login Buttons */

.social-login-buttons {
  display: flex;
  width: calc(100% + 20px);
  button {
    flex: 1;
    text-align: center;
    border: 1px solid #333;
    color: #333;
    border-radius: 4px;
    margin-top: 10px;
    margin-right: 20px;
    font-size: 14px;
    padding: 9px 5px;
    max-width: 50%;
    transition: 0.3s;
    &:hover {
      background-color: #333;
      color: #fff;
    }
    i {
      position: relative;
      top: 1px;
      margin-right: 7px;
      font-size: 15px;
    }
  }
  .qq-login {
    border-color: #51b7ec;
    color: #51b7ec;
    background-color: #fff;
    &:hover {
      background-color: #51b7ec;
      color: #fff;
    }
  }
  .wechat-login {
    border-color: #28b661;
    color: #28b661;
    background-color: #fff;
    &:hover {
      background-color: #28b661;
      color: #fff;
    }
  }
}

@media (max-width: 768px) {
  .social-login-separator {
    margin-bottom: 25px;
  }
  .social-login-buttons {
    width: 100%;
    display: block;
    max-width: 100%;
    a {
      width: 100%;
      display: block;
      max-width: 100%;
    }
  }
  .login-register-page .social-login-buttons button {
    margin-right: 0;
    margin-left: 0;
    width: 100%;
    display: block;
    max-width: 100%;
  }
}
.login-register-page .welcome-text h3 {
  font-size: 26px;
}
</style>
