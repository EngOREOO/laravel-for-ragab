<h2>إضافة مقال جديد</h2>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label>العنوان:</label>
    <input type="text" name="title"><br><br>

    <label>المحتوى:</label><br>
    <textarea name="content" rows="5" cols="40"></textarea><br><br>

    <button type="submit">نشر المقال</button>
</form>
