<x-app-layout>
    <x-slot name="header">
    <div class="container">
    <div class="row justify-content">
        <div class="col-md-12 mb-5">
            <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="300" alt="">
        </div>
        @foreach($barangs as $barang)
        <div class="col-md-4">
            <div class="card">
              <img class="frame" src="{{ url('uploads') }}/{{ $barang->gambar }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                    <strong>Stok :</strong> {{ $barang->stok }} <br>
                    <hr>
                    <strong>Keterangan :</strong> {{ $barang->keterangan }}
                </p>
              <div class="flex items-center">
              <br><a href="{{ url('pesan') }}/{{ $barang->id }}" class="inline-flex items-center button">Pesan</a>
              </div>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
    </x-slot>
</x-app-layout>
