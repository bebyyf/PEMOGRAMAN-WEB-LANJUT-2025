<!DOCTYPE html>
<html>
<head>
    <title>Add Item</title>{{--digunakan untuk menentukan judul halaman yang akan ditampilakn di halaman browser--}}
</head>
<body>
    <h1>Add Item</h1> {{--digunakan untuk menampilkan judul halaman (Add Item) di halaman browser--}}
    <form action="{{ route('items.store') }}" method="POST"> {{--digunakan agar formulir menggunakan metode POST yang berfungsi untuk mengirimkan data pada server--}}
        @csrf {{--digunakan agar laravel mengecek metode permintaan POST--}}
        <label for="name">Name:</label> {{--digunakan agar inputan memiliki nama name--}}
        <input type="text" name="name" required> {{--digunakan untuk memasukkan nama item bertipe text--}}
        <br>
        <label for="description">Description:</label> {{--digunakan untuk menginput deskripsi dan memastikan bahwa inputan tidak boleh kosong--}}
        <textarea name="description" required></textarea> {{--digunakan untuk memasukkan deskripsi item--}}
        <br>
        <button type="submit">Add Item</button> {{--digunakan untuk membuat tombol apabila di klik akan mengirimkan data formulir melalui metode POST--}}
    </form>
    <a href="{{ route('items.index') }}">Back to List</a> {{--digunakan untuk membuat link agar apabila di klik maka akan kembali pada halaman utma utnuk menampilkan daftar item--}}
</body>

</html>