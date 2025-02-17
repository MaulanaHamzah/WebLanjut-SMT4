<!DOCTYPE html>
<html>
<head>
<title>Edit Item</title>
</head>
kbody>
<h1>Edit Item</h1>
<form action="{{ route('items.update', $item) }}" method="POST">
@csrf
@method('PUT')
<label for="name">Name :
<input type="text" name="name" value="{{ $item->name }}" required>
<br>
<label for="description">Description :
<textarea name="description" required>{{ $item->description }}</textarea>
<br>
<button type="submit">Update Item</button>
</form>
<a href="{{ route('items.index') }}">Back to List</a>
</body>
</html>