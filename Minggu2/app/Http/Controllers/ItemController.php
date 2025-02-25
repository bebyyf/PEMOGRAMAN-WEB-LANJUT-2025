<?php

namespace App\Http\Controllers;

use App\Models\Item; //berfungsi untuk mengambil/menginpor data model item yang ada App models
use Illuminate\Http\Request;

class ItemController extends Controller
{
    
    public function index()
    {
        $items = Item::all(); //digunakan untuk mengambil data dari model item
        return view ('items.index', compact('items')); //digunakan untuk mengembalikan view dengan nama items.index dan mengirimkan data items di dalamnya
    }

    public function create()
    {
        return view ('items.create'); //berfungsi untuk mengembalikan view bernama items.create dan menambahkan data baru di dalam tabel items.
    }

    public function store(Request $request)
    {
        $request->validate([ //berfungsi untuk memeriksa inputan sesuai atau eror dengan cara di validasi terlebih dahulu, apabila tidak sesuai maka akan menampilkan pesan eror
            'name' => 'required', //required digunakan untuk field yang wajib diisi, dan apabila kosong maka akan muncul pesan eror.
            'description' => 'required',
        ]);

        // item::create($request->all());
        //return redirect() ->route ('items.index');

        //Hanya masukkan atribute yang diizinkan
        Item::create($request->only(['name', 'description'])); //perintah ini digunakan untuk mengambil atribute name dan description dari data yang dikirim dari form
        return redirect()->route('items.index')->with('success', 'Item added successfully.'); //perintah ini digunakan untuk mengarahkan pengguna pada halaman daftar item setelah proses penyimpanan selesai kemudian memunculkan message success dan pesan item added successfully sebagai notifikasi apabila item berhasil ditambahkan.
    }

    
    public function show(string $id)
    {
        return view ('items.show', compact('item')); //digunakan untuk menampilkan halaman detail sebuah item berdasarkan ID dari route.
    }

    public function edit(string $id)
    {
        return view ('items.edit', compact('item')); //digunakan untuk menampilkan halaman edit item (berdasarkan formulir yang sudah diisi)
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([ //digunakan untuk memeriksa inputan sesuai maka data akan disimpan kedalam database apabila gagal maka akan kembali pada halaman selanjutnya dan memunculkan pesan eror
            'name'=> 'required',
            'description' => 'required',
        ]);

        //$item->update($request->all());
        //return redirect()->route('items.index);
        //Hanya masukkan atribute yang diizinkan
        $item->update($request->only(['name', 'description'])); //mengambil atribute name dan description dari inputan form 
        return redirect()->route ('items.index')->with ('success', 'Item updated successfully.'); //digunakan untuk memperbarui data item yang ada pada database dan memvalidasi apabila berhasil maka data yang ada di database akan diperbarui, dan apabila validasi gagal maka akan kembali pada halaman sebelumnya dan memunculkan pesan eror.
    }

    public function destroy(Item $item)
    {
        //return redirect()->route('items.index); 
        $item->delete(); //digunakan untuk menghapus item yang dipilih dari database
        return redirect()->route('items.index')->with('success', 'Item deleted successfully'); //digunakan untuk mengembalikan pengguna pada halaman daftar item apabila item berhasil dihapus, apabila item ditemukan maka item akan dihapus dari database, dan jika item tidak ditemukan laravel akan memunculkan message error (Not Found).
    }
}
