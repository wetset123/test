<?php if (!defined('THINK_PATH')) exit();?><div class="form">
<h1>注册</h1>
<DIV class="register">
<FORM method="post" action="/contest/index.php/Register/insert">
<div>
<label for="username">用户名：</label><INPUT type="text" name="username" id="username" placeholder="请输入用户名" required>
</div>
<div>
<label for="pass">密码：</label><INPUT type="password" name="pass" id="pass" placeholder="请输入密码" required>
</div>
<div>
<label for="repass">确认密码：</label><INPUT type="password" name="repass" id="repass" placeholder="请再次输入密码" required>
</div>
<div>
<label for="email">邮箱：</label><INPUT type="email" name="email" id="email" placeholder="请输入邮箱" required>
</div>
<div>
				<LABEL for="captcha">验证码：</LABEL>
				<INPUT type="text" name="captcha" id="captcha" placeholder="请输入验证码" maxlength="4" required>
				<img width="20%" class="captcha" height="35" alt="验证码" src="<?php echo U('index/Register/verify_c',array());?>" onClick="this.src=this.src+'?'+Math.random()">
				</div>
<INPUT type="submit" value="提交">
</FORM>
</DIV>
</div>