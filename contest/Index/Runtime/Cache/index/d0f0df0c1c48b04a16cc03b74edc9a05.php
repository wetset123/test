<?php if (!defined('THINK_PATH')) exit();?><div class="form">
	<h1>登陆</h1>
	<div class="login">
		<form method="post" action="/contest/index.php/Login/loggedin">
			<div>
				<LABEL for="username">用户名：</LABEL>
				<INPUT type="text" name="username" id="username" placeholder="请输入用户名" required>
			</div>
			<div>
				<LABEL for="pass">密码：</LABEL>
				<INPUT type="password" name="pass" id="pass" placeholder="请输入密码" required>
			</div>
			<div>
				<LABEL for="captcha">验证码：</LABEL>
				<INPUT type="text" name="captcha" id="captcha" placeholder="请输入验证码" maxlength="4" required>
				<img width="20%" class="captcha" height="35" alt="验证码" src="<?php echo U('index/Register/verify_c',array());?>" onClick="this.src=this.src+'?'+Math.random()">
				</div>
			<INPUT type="submit" value="提交">
		</form>
	</div>
</div>