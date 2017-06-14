<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('style/css/ch-ui.admin.css')}}">
    <link rel="stylesheet" href="{{asset('style/font/css/font-awesome.min.css')}}">
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo;  添加页
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
                <a href="{{url('category/addpage')}}"><i class="fa fa-plus"></i>新增分类</a>
                <a href="#"><i class="fa fa-plus"></i>上传视频</a>

            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
    
    <div class="result_wrap">
        <form action="{{url('article/add')}}" method="post">
            {{csrf_field()}}
            @include('msg.sessionMsg')
            @include('errors.error')
            <input type="hidden" name="user_id" value="{{Auth::id()}}">
            <table class="add_tab">
                <tbody>

                    <tr>
                        <th><i class="require">*</i>标题：</th>
                        <td>
                            <input type="text" class="lg" name="title">
                            <p>标题可以写30个字</p>
                        </td>
                    </tr>

                    <tr>
                        <th><i class="require">*</i>配图：</th>
                        <td><input type="text" name="img"></td>
                    </tr>

                    <tr>
                        <th>标签：</th>
                        <td>
                            @foreach($cates as  $cate)
                            <label for=""><input type="checkbox" value="{{$cate->id}}" name="tags[]">{{$cate->description}}</label>
                                @endforeach

                        </td>
                    </tr>
                    <th><i class="require">*</i>文章发布时间：</th>
                        <td>
                            <input type="text" name="published_at">
                        </td>
                    </tr>
                    <tr>
                        <th>描述：</th>
                        <td>
                            <textarea name="discription"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>详细内容：</th>
                        <td>
                            <textarea class="lg" name="content"></textarea>
                            <p>标题可以写30个字</p>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" class="btn" value="添加文章">
                            <input type="button" class=" btn back" onclick="history.go(-1)" value="返回">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

</body>
</html>