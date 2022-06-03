<x-app-layout>
    <x-slot name="header">

<!-- breadcrumb -->
    <nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center">
    <li>
    <div class="flex items-center">
    <a href="{{ url('dashboard')}}" class="inline-flex items-center breadcrumb"><i class="material-icons" >home</i>Halaman Utama</a>
    </div>
    </li>
    <li>
    <div class="flex items-center">
    <a href="#" class="inline-flex items-center breadcrumb"><i class="material-icons">chevron_right</i>Detail Produk</a>
    </div>
    </li>
    </ol>
    </nav>

    <div class="row">
        <div class="header">
            <br><hr><h1>Histori Pesanan</h1><hr>
        </div>
        <div>
            <table class="text-align-left" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Jumlah Harga</th>
                </tr>
                <tr></tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                 @foreach($pesanans as $pesanan)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $pesanan->tanggal }}</td>
                    <td>@if($pesanan->status == 1)
                        Lanjutkan Pembayaran
                        @else
                        Pengiriman 
                        @endif</td>
                    <td>Rp. {{ number_format($pesanan->jumlah_harga) }}</td>
                    <td><a href="{{ url('historydetail') }}/{{ $pesanan->id }}" class="button">Detail</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </x-slot>
</x-app-layout>
