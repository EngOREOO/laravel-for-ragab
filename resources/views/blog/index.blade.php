<h2>كل المقالات</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<a href="{{ route('posts.create') }}">إضافة مقال جديد</a>

@foreach($posts as $post)
    <div style="border:1px solid #ccc; margin:10px; padding:10px;">
        <h3>{{ $post->title ?? 'no title found' }}</h3>
        <p>{{  $post->content }}</p>
        <small>بواسطة: {{ $post->user->name }}</small><br>

        <a href="{{ route('posts.edit', $post) }}">تعديل</a>
        <a href="{{ route('posts.show', $post) }}">عرض</a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">حذف</button>
        </form>
    </div>
@endforeach
