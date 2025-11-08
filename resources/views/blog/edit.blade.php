<h2>تعديل المقال</h2>

<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <label>العنوان:</label>
    <input type="text" name="title" value="{{ $post->title }}"><br><br>

    <label>المحتوى:</label><br>
    <textarea name="content" rows="5" cols="40">{{ $post->content }}</textarea><br><br>

    <button type="submit">تحديث المقال</button>
</form>
