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
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="{{url('admin/list')}}">列表页</a> &raquo; 修改文章
    </div>
    <!--面包屑导航 结束-->

	{{--<!--结果集标题与导航组件 开始-->--}}
	{{--<div class="result_wrap">--}}
        {{--<div class="result_title">--}}
            {{--<h3>快捷操作</h3>--}}
        {{--</div>--}}
        {{--<div class="result_content">--}}
            {{--<div class="short_wrap">--}}
                {{--<a href="#"><i class="fa fa-plus"></i>新增文章</a>--}}
                {{--<a href="#"><i class="fa fa-plus"></i>上传视频</a>--}}
                {{--<a href="#"><i class="fa fa-recycle"></i>批量删除</a>--}}
                {{--<a href="#"><i class="fa fa-refresh"></i>更新排序</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!--结果集标题与导航组件 结束-->
    
    <div class="result_wrap">

        <form action="{{url('article/edite')}}" method="post">
            @include('errors.error')
            <input type="hidden" name="id" value="{{$article->id}}">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                    {{--<tr>--}}
                        {{--<th width="120"><i class="require">*</i>分类：</th>--}}
                        {{--<td>--}}
                            {{--<select name="">--}}
                                {{--<option value="">==请选择==</option>--}}
                                {{--<option value="19">精品界面</option>--}}
                                {{--<option value="20">推荐界面</option>--}}
                            {{--</select>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    <tr>
                        <th><i class="require">*</i>标题：</th>
                        <td>
                            <input type="text" class="lg" name="title" value="{{$article->title}}">
                            <p>标题可以写30个字</p>
                        </td>
                    </tr>

                    <tr>
                        <th><i class="require">*</i>配图：</th>
                        <td><input type="text" name="img" value="{{$article->img}}"></td>
                    </tr>

                    <tr>
                        <th>标签：</th>
                        <td>
                            @foreach($cates as $cate)
                            <label for=""><input type="checkbox" name="tag[]"
                                                 @foreach($tags as $tag)
                                                 @if($tag==$cate->id)
                                                 checked="checked"
                                                 @endif
                                                 @endforeach
                                                 value="{{$cate->id}}">{{$cate->description}}</label>
                            @endforeach
                        </td>
                    </tr>
                    <th><i class="require">*</i>文章发布时间：</th>
                        <td>
                            <input type="text" value="{{$article->published_at}}" name="published_at">
                        </td>
                    </tr>
                    <tr>
                        <th>描述：</th>
                        <td>
                            <textarea name="discription">{{$article->description}} </textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>详细内容：</th>
                        <td>
                            <textarea class="lg" name="content">{{$article->content}}</textarea>
                            <p>标题可以写30个字</p>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="提交">
                            <input type="button" class="back" onclick="history.go(-1)" value="返回">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

</body>
</html>