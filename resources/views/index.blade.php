<x-app-layout>
    <x-slot name="header">

<!-- breadcrumb -->
    <nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="{{ url('dashboard')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
        Halaman Utama</a>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Detail Produk</a>
      </div>
    </li>
    </ol>
    </nav>

<!-- detail produk -->
    <div class="row">
        <div class="col-md-6">
            <h1>{{ $barang->nama_barang }}</h1>
            <img src="{{ url('uploads') }}/{{ $barang->gambar }}" class="rounded mx-auto d-block" width="25%" alt=""> 
        </div>
        <div class="col-md-6 mt-5">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                         <td>Rp. {{ number_format($barang->harga) }}</td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td>:</td>
                        <td>{{ number_format($barang->stok) }}</td>
                    </tr>
                        <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td>{{ $barang->keterangan }}</td>
                    </tr>
                                   
                    <tr>
                        <td>Jumlah Pesan</td>
                        <td>:</td>
                        <td>
                         <form method="post" action="{{ url('pesan') }}/{{ $barang->id }}" >
                            @csrf
                                <input type="text" name="jumlah_pesan" class="form-control" required="">
                                <button type="submit"></i> Masukkan Keranjang</button>
                         </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
        </div>
    </div>
    </x-slot>
</x-app-layout>
