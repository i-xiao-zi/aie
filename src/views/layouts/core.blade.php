<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="{{asset('vendor/multi/lib/html5shiv.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/multi/lib/respond.min.js')}}"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/multi/static/h-ui/css/H-ui.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('vendor/multi/static/h-ui.admin/css/H-ui.admin.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('vendor/multi/lib/Hui-iconfont/1.0.8/iconfont.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('vendor/multi/static/h-ui.admin/skin/default/skin.css')}}" id="skin" />
<link rel="stylesheet" type="text/css" href="{{asset('vendor/multi/static/h-ui.admin/css/style.css')}}" />
<!--[if IE 6]>
<script type="text/javascript" src="{{asset('vendor/multi/lib/DD_belatedPNG_0.0.8a-min.js')}}" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>@yield('title')</title>
@yield('head')
<style>
@yield('style')
</style>
</head>
<body>
@yield('content')
<footer class="footer mt-20">
	<div class="container">
		<p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br>
			Copyright &copy;2015-2017 H-ui.admin v3.1 All Rights Reserved.<br>
			本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
	</div>
</footer>
<script type="text/javascript" src="{{asset('vendor/multi/lib/jquery/1.9.1/jquery.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('vendor/multi/lib/layer/2.4/layer.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/multi/static/h-ui/js/H-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/multi/static/h-ui.admin/js/H-ui.admin.js')}}"></script> 
@yield('foot')
<script>
@yield('script')
</script>
</body>
</html>