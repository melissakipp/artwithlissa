<x-blog-layout>
    <h1>Blog Posts</h1>
    @forelse ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{$post->slug}}">
                    {{ $post->title }}
                </a>
            </h2>
            <div class="category-tag">
                <a href="/category/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
            </div>
            <section>
                {{ $post->excerpt }}
            </section>
        </article>
        @empty
            @if(request()->routeIs('posts.index'))
                <p>Something as gone wrong on our end. Please check back later. Sorry for the inconvenience.</p>
            @endif
    @endforelse
</x-blog-layout>



