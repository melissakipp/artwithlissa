<x-blog-layout>
    <article class="post-container">
        <h1>{!! $post->title !!}</h1>
        <section>
            {!! $post->body !!}
        </section>
    </article>

    <a href="/posts">Go back to all posts</a>
</x-blog-layout>

