<aside class="sidebar">

    <div class="widget recent-post">
        <h5 class="widget-title">Recent News</h5>
        @foreach ($blogs as $key => $blog)
            <div class="recent-post-single">
                <div class="recent-post-img">
                    <img src="{{ $blog->img }}" alt="thumb">
                </div>
                <div class="recent-post-bio">
                    <h6><a href="{{ route('about.blog.single', $blog->slug) }}">{{ $blog->title }}</a>
                    </h6>
                    <span><i class="far fa-clock"></i> {{ $blog->created_at->format('M d, Y') }}</span>
                </div>
            </div>
        @endforeach
    </div>

    @if ($downloads->count() > 0)
        <div class="widget recent-post">
            <h5 class="widget-title">Recent Downloads</h5>
            <div class="research-download">
                @foreach ($downloads as $file)
                    <a href="{{ route('resources.download', $file->firstMedia('download')->id) }}"><i
                            class="far fa-download"></i>
                        {{ $file->description }}</a>
                @endforeach
            </div>
        </div>
    @endif

    <div class="widget social-share">
        <h5 class="widget-title">Follow Us</h5>
        <div class="social-share-link">
            @foreach (social() as $key => $social)
                <a target="_blank" href="{{ $social['link'] }}"><i class="{{ $social['icon'] }}"></i></a>
            @endforeach
        </div>


    </div>
</aside>
