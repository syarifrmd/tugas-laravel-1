<h2>Tambah Buku</h2>
 <form action="{{ route('books.store') }}" method="POST">
 @csrf
 <label>Title:</label>
 <input type="text" name="title" required>
 <label>Author:</label>
 <input type="text" name="author" required>
 <label>Year:</label>
 <input type="number" name="year" required>
 <button type="submit">Simpan</button>
 </form>