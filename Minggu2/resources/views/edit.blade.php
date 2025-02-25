<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title> {{--digunakan untuk membuat judul pada halaman browser --}}
</head>
<body>
    <h1>Edit Item</h1> {{--digunakan untuk menampilkan judul Edit Item paa heading utama halaman pada browser--}}
    <form action="{{ route('items.update', $item) }}" method="POST"> {{--digunakan untuk mengirimkan form ke route dengan menggunakan parameter item--}}
        @csrf
        @method('PUT') {{--digunakan supaya laravel mengetahui bahwa menggunakan request PUT--}}
        <label for="name">Name:</label> {{--digunakan untuk mengedit nama item--}}
        <input type="text" name="name" value="{{ $item->name }}" required> {{--digunakan untuk menginput nama menggunakan tipe text--}}
        <br>
        <label for="description">Description:</label> {{--digunakan untuk menginput deskripsi dengan teks panjang dan menampilkan deskripsi item yang tersimpan dalam database--}}
        <textarea name="description" required>{{ $item->description }}</textarea> {{--digunakan untuk menampilkan deskripsi item yang tersimpan didalam databse--}}
        <br>
        <button type="submit">Update Item</button> {{--digunakan untuk mengupdate (memperbarui) data item didalam database--}}
    </form>
    <a href="{{ route('items.index') }}">Back to List</a> {{--digunakan untuk apabila di klik maka akan mnegarahkan ke halaman daftar item, dan apabila tidak ingin mengedit maka akan kembali ke halaman sebelumnya--}}
</body>

</html>