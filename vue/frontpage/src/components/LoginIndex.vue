<template>
    <div class="login-content">
        <img alt="Vue logo" src="../assets/logo.jpg" class="login-logo">
        <h3>管理登录</h3>
        <div class="form-group">
            <input type="text" placeholder="用户名" name="username" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="密码" name="password" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" placeholder="验证码" name="yzm" class="form-control">
        </div>
        
        <input type="submit" value="登录" name="submit" class="btn btn-primary">
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
.login-content{
    width: 300px;
    height: 300px;
    margin: 0 auto;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -150px;
    margin-left: -150px;
}
.login-logo{
  width: 60px;
  height: 50px;
  border-radius: 6px;
}
</style>