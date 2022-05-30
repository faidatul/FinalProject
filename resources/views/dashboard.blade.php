<x-app-layout>
    <x-slot name="header">
        <div class="col-md-12 mb-5">
            <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="300" alt="">
        </div>
        @foreach($barangs as $barang)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ url('uploads') }}/{{ $barang->gambar }}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{ $barang->nama_barang }}</h5>
            <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                    <strong>Stok :</strong> {{ $barang->stok }} <br>
                    <hr>
                    <strong>Keterangan :</strong> <br>
                    {{ $barang->keterangan }} 
            <a href="#" class="btn btn-primary">Pesan</a>
         </div>
        @endforeach
    </x-slot>
</x-app-layout>
