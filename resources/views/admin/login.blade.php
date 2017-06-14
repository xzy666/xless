<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('style/css/ch-ui.admin.css')}}">
	<link rel="stylesheet" href="{{asset('style/font/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">

</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>xless.cn </h1>
		<h2>管理平台</h2>

		<div class="form">
			<form action="{{url('admin/loginRequest')}}" method="post">
				{{csrf_field()}}
				<ul>
					<li>
					<input type="text" name="email" class="text"  placeholder="邮箱" required/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="password" class="text" required placeholder="密码"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
				@include('errors.error')
			</form>

			<p><a href="{{url('/')}}">返回首页</a> </p>
		</div>
	</div>
</body>
</html>