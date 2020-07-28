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
							<div style="display:inline-block;line-height:82px;">还没注册账号？</div>
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
        <div class="col-xl-4" style="margin: 0 auto;">
          <div class="login-register-page">
            <div class="welcome-text">
              <h4>
                <b>欢迎访问牛库</b>
              </h4>
              <span>
                还没有注册？ 请
                <a href="/">创建帐号!</a>
              </span>
            </div>

            <form method="post" id="register-account-form" class="login-form validform" action="/">
              <div class="margin-bottom-14" title="请输入登录账号">
                <el-input
                  placeholder="用户名/邮箱/手机号码"
                  v-model="input_account"
                  clearable>
                </el-input>
              </div>

              <div class="margin-bottom-14" title="请输入登录密码">
                <el-input placeholder="请输入登录密码" v-model="input_pwd" show-password></el-input>
              </div>

              <div>
                <div class="checkbox" style="margin-left: 3px;">
                  <el-checkbox v-model="checked_remember">记住我</el-checkbox>
                </div>
                <a href="/password">
                  <div style="display: inline-block;float: right;margin-right: 3px;">找回密码</div>
                </a>
              </div>
              <el-button type="primary">登录<i class="el-icon-arrow-right el-icon--right"></i></el-button>
              <button
                class="button full-width button-sliding-icon ripple-effect margin-top-10"
                type="submit"
              >
                登录
                <i class="icon-material-outline-arrow-right-alt"></i>
              </button>
            </form>
            <div class="social-login-separator">
              <span>或</span>
            </div>
            <div class="social-login-buttons">
              <button class="qq-login ripple-effect">
                <i class="icon-brand-qq"></i> 通过QQ登录
              </button>
              <button class="wechat-login ripple-effect">
                <i class="icon-brand-weixin"></i> 通过微信登录
              </button>
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
        input_account: '',
        input_pwd: '',
        checked_remember: '',
      }
    }
};
</script>

<style lang="scss" scoped>
.headblock {
    display: inline-block;
    height: 100%;
    line-height: 82px;
    font-size: 14px;
}
</style>
