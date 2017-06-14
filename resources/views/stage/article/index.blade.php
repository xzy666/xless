@extends('stage.layouts.app')

@section('content')
    <jumbotron v-cloak>
        <h3>Man born to die.</h3>

        <h6>xless.cn 社区</h6>
    </jumbotron>

    @include('stage.widgets.article')

    {{--{{ $articles->links('pagination.default') }}--}}

@endsection