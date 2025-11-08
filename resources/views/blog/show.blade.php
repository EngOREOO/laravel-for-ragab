<h1>{{ $post->title ?? 'no title' }}</h1>
<p>{{ $post->content ?? 'no content found' }}</p>
<small>by {{ $post->user->name ?? 'undefined'}}</small>
