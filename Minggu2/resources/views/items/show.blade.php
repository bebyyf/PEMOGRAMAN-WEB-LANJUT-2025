<!DOCTYPE html>
<html>
<head>
    <title>Item List</title> {{--digunakan untuk membuat judul halaman yang akan ditampilkan pada halaman browser--}}
</head>
<body>
    <h1>Items</h1> {{--digunakan untuk menampilkan judul halaman Items sebagai heading utama pada browser--}}
    @if(session('success'))
        <p>{{ session('success') }}</p> {{--digunakan untuk menampilkan pesan sukses--}}
    @endif
    <a href="{{ route('items.create') }}">Add Item</a> {{--digunakan untuk menampilkan form untuk menambahkan item baru--}}
    <ul>
        @foreach ($items as $item) {{--berfungsi agar items disimpan sementara dalam variable item--}}
            <li>
                {{ $item->name }} {{--digunakan untuk menampilkan nama item yang diambil dari database--}}
                <a href="{{ route('items.edit', $item) }}">Edit</a> {{--digunakan untuk membuka form edit untuk item yang akan dipilih--}}
                <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;"> {{--digunakan untuk menghapus item --}}
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button> {{--tombol ang digunakan untuk menghapus item yang sedang ditampilkan--}}
                </form>
            </li>
        @endforeach
    </ul>
</body>

</html>