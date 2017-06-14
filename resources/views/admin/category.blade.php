<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('style/css/ch-ui.admin.css')}}">
    <link rel="stylesheet" href="{{asset('style/font/css/font-awesome.min.css')}}">
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{asset('style/js/jquery.js')}}"></script>
    <script src="{{asset('js/jqueryform.js')}}"></script>
</head>
<body>
<!--面包屑导航 开始-->
<div class="crumb_warp">
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 添加页
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
    <form id="myform" method="post" action="{{url('category/add')}}">
        {{csrf_field()}}
        @include('msg.sessionMsg')
        @include('errors.error')
        <table class="add_tab">
            <tr>
                <th>已有标签：</th>
                <td>
                    @foreach($cates as  $cate)
                        <label for="">[{{$cate->description}}]
                        </label>
                    @endforeach
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>添加新标签：</th>
                <td>
                    <input type="text"  id="desc" name="description" required>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="button" class="btn" value="新增分类" onclick="add()">
                    <input type="button" class="btn back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
        </table>
    </form>
</div>

<script>
    function add() {
        var options = {
            success: function () {
                location.reload();
            },

        }
            $(document).ready(function() {
            $('#myform').ajaxForm(options).submit();
        });

    }

</script>

</body>
</html>