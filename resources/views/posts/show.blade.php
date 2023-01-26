<x-blog-layout>
    <article class="post-container">
        <h1>{!! $post->title !!}</h1>
        <p class="category-tag">
            By:
            <a href="#">
                Jeffrey Way
            </a>
            in
            <a href="/category/{{ $post->category->slug }}">
                {{ $post->category->name }}
            </a>
        </p>
        <section>
            {!! $post->body !!}
        </section>
    </article>

    <a href="/posts">Go back to all posts</a>
</x-blog-layout>

