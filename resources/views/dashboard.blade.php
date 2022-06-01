<x-app-layout>
    <x-slot name="header">
        <div class="col-md-12 mb-5">
            <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="300" alt="">
        </div>
        
        @foreach($barangs as $barang)
        <div class="max-w-sm rounded overflow-hidden shadow-lg mt-8">
            <img class = "object-cover h-2 max-w-12" src="{{ url('uploads') }}/{{ $barang->gambar }}" width="25%" alt="gambar produk">
            <div class="px-6 py-4">
                <p class="font-bold text-xl mb-2">{{ $barang->nama_barang }}</p><br>
            </div>
                <div class="px-6 pt-4 pb-px">
                    <span>Harga :</span> Rp. {{ number_format($barang->harga)}} <br>
                    <span>Stok :</span> {{ $barang->stok }} <br>
                    <span>Keterangan : </span>{{ $barang->keterangan }}<br> 
                </div>
                <a href="{{ url('pesan')}}/{{ $barang->id }}">Pesan</a><br></br>
        </div>
        @endforeach
    </x-slot>
</x-app-layout>
