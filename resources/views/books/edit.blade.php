<h2>Edit Buku</h2>
 <form action="{{ route('books.update', $book->id) }}" method="POST">
 @csrf
 @method('PUT')
 <label>Title:</label>
 <input type="text" name="title" value="{{ $book->title }}" required>
 <label>Author:</label>
 <input type="text" name="author" value="{{ $book->author }}" required>
 <label>Year:</label>
 <input type="number" name="year" value="{{ $book->year }}" required>
 <button type="submit">Update</button>
 </form>
