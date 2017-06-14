<div class="container list">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @forelse($articles as $article)
            <div class="media">
                @if($article->img)
                <a class="media-left" href="">
                    <img alt="" src="{{ $article->img }}" data-holder-rendered="true" style="width: 260px;height: 160px;">
                </a>
                @endif
                <div class="media-body">
                    <h6 class="media-heading">
                        <a href="{{ url('article/'.$article->id) }}">
                            {{ $article->title }}
                        </a>
                    </h6>
                    <div class="meta">
                        {{--<span class="cinema">{{ $article->subtitle }}</span>--}}
                    </div>
                    <div class="description">
                        {{ $article->description }}
                    </div>
                    <div class="extra">
                        @foreach($article->tags as $tag)
                        <a href="#">
                            <div class="label"><i class="icon-adjust"></i>{{ \App\Category::find($tag)->description }}</div>
                        </a>
                        @endforeach

                        <div class="info">
                            <i class="icon-star"></i>{{ $article->user->name or 'null' }}&nbsp;,&nbsp;
                            <i class="icon-group"></i>{{ \Carbon\Carbon::parse($article->published_at)->diffForHumans() }}&nbsp;,&nbsp;
                            <i class="icon-shield"></i>{{ $article->view_count }}
                            <a href="{{ url('article/'.$article->id) }}" class="pull-right">
                                Read More <i class=" icon-double-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            @empty
                <h3 class="text-center">Nothing</h3>
            @endforelse
            <div>
            <div class="col-md-3">
            </div>
                {{$articles->render()}}
            </div>
        </div>
    </div>
</div>