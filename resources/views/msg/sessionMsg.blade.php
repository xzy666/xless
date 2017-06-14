@if(session()->has('msg'))
    <div class="alert alert-info">

        <h2>{{session('msg')}}</h2></div>
@endif
