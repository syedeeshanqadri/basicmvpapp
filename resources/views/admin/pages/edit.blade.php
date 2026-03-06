<h1>Edit Page</h1>

<form method="POST" action="/admin/pages/{{ $page->id }}">
@csrf

<label>Title</label>
<input type="text" name="title" value="{{ $page->title }}">

<br><br>

<label>Content</label>
<textarea name="content">{{ $page->content }}</textarea>

<br><br>

<button type="submit">
Update
</button>

</form>