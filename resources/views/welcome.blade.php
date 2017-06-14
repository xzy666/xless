@extends('app')
@section('content')
    <div id="particles"></div>
    <div class="content">
        <div class="title m-b-md">

        </div>

        <div class="description">
            Man born to die.
        </div>

        <div class="links">
            <a href="{{url('article')}}">社区</a>
            <a href="{{url('about')}}">关于我</a>
            <a target="_blank" href="http://weibo.com/xizy21">微博</a>
            {{--<a target="_blank" href="https://github.com/xzy666">GitHub</a>--}}
            <a href="{{url('/donate')}}">打赏</a>
        </div>
@endsection
