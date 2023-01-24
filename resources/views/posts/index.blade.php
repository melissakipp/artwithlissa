<x-blog-layout>
    <h1>Blog Posts</h1>
    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{$post->slug}}">
                    {{ $post->title }}
                </a>
            </h2>
            <div class="category-tag">
                <a href="#">{{ $post->category->name }}</a>
            </div>
            <section>
                {{ $post->excerpt }}
            </section>
        </article>
    @endforeach
</x-blog-layout>



