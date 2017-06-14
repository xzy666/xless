@extends('app')
@section('content')
    <div id="particles"></div>
    <div class="content">
        <div class="title m-b-md">
        </div>

        <div class="description">
            小许的自我介绍.
        </div>

        <div class="links">


            <video
                    id="my-player"
                    class="video-js"
                    controls
                    preload="auto"
                    poster="{{asset('avatar.jpg')}}"
                    data-setup='{}'
            style=" width: 50%;
  height: auto;">
                <source src="http://ootdb580q.bkt.clouddn.com/me.mp4" type="video/mp4"></source>
                {{--<source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm"></source>--}}
                {{--<source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg"></source>--}}
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">
                        supports HTML5 video
                    </a>
                </p>
            </video>


        </div>
    </div>
    @endsection