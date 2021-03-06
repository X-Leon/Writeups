<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta content="width=device-width,initial-scale=0.8, minimum-scale=0.8, maximum-scale=3" name="viewport">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta property="qc:admins" content="754034015366713545637571540352652">
    <meta property="wb:webmaster" content="1ad39047f32b5b6b">
    <title>统一身份认证平台</title>
    <script>
    </script><script type="text/javascript" src="./static/统一身份认证平台_files/jquery.min.js"></script><link href="./static/统一身份认证平台_files/login.css" rel="stylesheet"><link href="./static/统一身份认证平台_files/custom.css" rel="stylesheet"><script type="text/javascript">
    </script></head>
<body>

<div class="auth_bg">
    <img src="./static/统一身份认证平台_files/login-bg-autumn.jpg" alt="">
</div>
<div class="auth_page_wrapper">
    <div class="auth_logo">
        <img src="./static/统一身份认证平台_files/login-logo.png" alt="logo">
    </div>
    <div class="auth_login_content">
        <div class="auth_login_left">
            <div class="auth_others">
            </div>
        </div>
        <div class="auth_login_right">
            <div class="auth_tab">
                <div class="auth_tab_links">
                    <ul>
                        <li id="accountLogin" style="width:100%" class="selected" tabid="01"><span>帐号登录</span></li>
                    </ul>
                </div>
                <div class="clearfloat"></div>
                <div class="auth_tab_content">
                    <div tabid="01" class="auth_tab_content_item" style="display: block;">

                        <div id="casLoginForm" class="fm-v clearfix amp-login-form" role="form">
                            <p>
                                <i class="auth_icon auth_icon_user"></i>
                                <input id="username" name="username" placeholder="用户名" class="auth_input" type="text" value="">
                                <span id="usernameError" style="display:none;" class="auth_error">请输入用户名</span>
                            </p>
                            <p>
                                <i class="auth_icon auth_icon_pwd"></i>
                                <input id="password" placeholder="密码" class="auth_input" type="password" value="" autocomplete="off">
                                <span id="passwordError" style="display:none;" class="auth_error">请输入密码</span>
                            </p>
                            <p id="cpatchaDiv">

                            </p>
                            <p>
                                <button type="submit" class="auth_login_btn primary full_width">登录
                                </button>
                            </p>
                            <p>访客账户:guest/guest</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfloat"></div>
    <div class="auth_login_footer">
 <span>
     Copyright&nbsp;©&nbsp;2019 SUSCTF
 </span>
    </div>
</div>
<script type="text/javascript" src="./static/统一身份认证平台_files/jquery.min.js"></script>
<script type="text/javascript" src="./static/统一身份认证平台_files/login.js"></script>
</body></html>
<?php
session_start();
?>

