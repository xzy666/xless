<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('style/css/ch-ui.admin.css')}}">
    <link rel="stylesheet" href="{{asset('style/font/css/font-awesome.min.css')}}">
    <script type="text/javascript" src="{{asset('style/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('style/js/ch-ui.admin.js')}}"></script>
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 列表页
    </div>
    <!--面包屑导航 结束-->

	<!--结果页快捷搜索框 开始-->
	<div class="search_wrap">
        <form action="{{url('article/search')}}" method="post">
            {{csrf_field()}}
            <table class="search_tab">
                <tr>
                    <th width="120">选择分类:</th>
                    <td>
                        <select name="tag">
                            <option value="0">全部</option>
                            @foreach($cates as $cate)
                            <option value="{{$cate->id}}" >{{$cate->description}}</option>
                                @endforeach
                        </select>
                    </td>
                    <th width="70">关键字:</th>
                    <td><input type="text" name="keywords" placeholder="关键字"></td>
                    <td><input type="submit" name="sub" class="btn" value="查询"></td>
                </tr>
            </table>
        </form>
    </div>
    <!--结果页快捷搜索框 结束-->
    @include('msg.sessionMsg')
    <!--搜索结果页面 列表 开始-->
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="#"><i class="fa fa-adjust"></i>文章详情列表</a>
                    <a href="#"><i class="fa fa-google"></i>视频详情列表</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>

                        <th class="tc">ID</th>
                        <th>标题</th>
                        <th>点击量</th>
                        <th>发布时间</th>
                        <th>更新时间</th>
                        <th>评论数</th>
                        <th>操作</th>
                    </tr>
                    @foreach($articles as $article)
                    <tr>

                        <td class="tc">{{$article->id}}</td>
                        <td>
                            <a href="#">{{$article->title}}{{$article->singleGetTags()}}</a>
                        </td>
                        <td>0</td>
                        <td>{{$article->created_at}}</td>
                        <td>{{\Carbon\Carbon::parse($article->updated_at)->diffForHumans()}}</td>
                        <td>1</td>

                        <td>
                            <a href="{{url('article/editePage/'.$article->id)}}">修改</a>
                            <a href="{{url('article/delete/'.$article->id)}}">删除</a>
                        </td>
                    </tr>
                        @endforeach



                </table>

                {{$articles->render()}}
{{--<div class="page_nav">--}}

{{--<div>--}}
{{--<a class="first" href="/wysls/index.php/Admin/Tag/index/p/1.html">第一页</a> --}}
{{--<a class="prev" href="/wysls/index.php/Admin/Tag/index/p/7.html">上一页</a> --}}
{{--<a class="num" href="/wysls/index.php/Admin/Tag/index/p/6.html">6</a>--}}
{{--<a class="num" href="/wysls/index.php/Admin/Tag/index/p/7.html">7</a>--}}
{{--<span class="current">8</span>--}}
{{--<a class="num" href="/wysls/index.php/Admin/Tag/index/p/9.html">9</a>--}}
{{--<a class="num" href="/wysls/index.php/Admin/Tag/index/p/10.html">10</a> --}}
{{--<a class="next" href="/wysls/index.php/Admin/Tag/index/p/9.html">下一页</a> --}}
{{--<a class="end" href="/wysls/index.php/Admin/Tag/index/p/11.html">最后一页</a> --}}
{{--<span class="rows">{{count($articles)}}条记录</span>--}}
{{--</div>--}}
{{--</div>--}}



                {{--<div class="page_list">--}}

                    {{--<ul>--}}
                        {{--<li class="disabled"><a href="#">&laquo;</a></li>--}}
                        {{--<li class="active"><a href="#">1</a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">3</a></li>--}}
                        {{--<li><a href="#">4</a></li>--}}
                        {{--<li><a href="#">5</a></li>--}}
                        {{--<li><a href="#">&raquo;</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
    <!--搜索结果页面 列表 结束-->



</body>
</html>