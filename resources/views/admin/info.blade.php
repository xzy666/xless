<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('style/css/ch-ui.admin.css')}}">
    <link rel="stylesheet" href="{{asset('style/font/css/font-awesome.min.css')}}">
</head>
<body>
	<!--面包屑导航 开始-->
	<div class="crumb_warp">

		<i class="fa fa-home"></i> <a href="#">首页</a> &raquo;  服务器概况
	</div>
	<!--面包屑导航 结束-->
	
	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('article/addpage')}}"><i class="fa fa-plus"></i>新增文章</a>
                <a href="#"><i class="fa fa-plus"></i>上传视频</a>
                {{--<a href="#"><i class="fa fa-recycle"></i>批量删除</a>--}}
                {{--<a href="#"><i class="fa fa-refresh"></i>更新排序</a>--}}
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

	
    <div class="result_wrap">
        <div class="result_title">
            <h3>系统基本信息</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>当前网站在线人数</label><span>11140</span>
                </li>
                <li>
                    <label>运行环境</label><span>{{$_SERVER['SERVER_SOFTWARE']}}</span>
                </li>

                <li>
                    <label>北京时间</label><span>{{\Carbon\Carbon::now()}}</span>
                </li>
                <li>
                    <label>当前登录IP</label><span>{{$_SERVER['SERVER_ADDR']}}</span>
                </li>
                <li>
                    <label>服务器域名/IP</label><span>{{$_SERVER['HTTP_HOST']}}</span>
                </li>

            </ul>
        </div>
    </div>


    <div class="result_wrap">
        <div class="result_title">
            <h3>使用帮助</h3>
        </div>
        <div class="result_content">
            <ul>

            </ul>
        </div>
    </div>
	<!--结果集列表组件 结束-->

</body>
</html>