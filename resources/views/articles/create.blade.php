@extends('app')
@section('content')
    <div id="particles"></div>
    <div class="content">
        <div class="title m-b-md">
        </div>

        <div class="description">
            - 添加博文 -
        </div>

        <div>
            <form action="{{url('article/create')}}" method="post" class="webform-client-form" >
                <div class="form-group">
                    <label for="title">标题：</label>
                    <input type="text" class="form-control"  placeholder="title">
                </div>
                <div class="form-group">
                    <label for="标签">标签：</label>
                    <input type="text" class="form-control "  placeholder="text">
                </div>
                <div class="form-group">
                    <label for="文章内容">文章内容：</label>
                    <textarea name="" id="" cols="100" rows="10" placeholder="文章内容...">.</textarea>
                </div>

                <fieldset class="captcha">
                    <legend>MarkDown Preview</legend>
                </fieldset>
                <div class="form-group">
                    <label for="1"></label>
                    <input type="submit" class="form-control btn-primary btn "  value="上传博文">
                </div>
            </form>

        </div>
    </div>

@endsection