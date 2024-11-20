<h2>Daftar Buku</h2>
<a href="{{ route('books.create') }}">Tambah Buku</a>
@if ($message = Session::get('success'))
 <p>{{ $message }}</p>
 @endif
<table>
 <tr>
 <th>Title</th>
 <th>Author</th>
 <th>Year</th>
 <th>Action</th>
 </tr>
 @foreach ($books as $book)
 <tr>
 <td>{{ $book->title }}</td>
 <td>{{ $book->author }}</td>
 <td>{{ $book->year }}</td>
 <td>
 <a href="{{ route('books.edit', $book->id) }}">Edit</a>
 <form action="{{ route('books.destroy', $book->id) }}" method="POST">
 @csrf
 @method('DELETE')
 <button type="submit">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
</table>