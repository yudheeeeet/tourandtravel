@extends('layoutAdmin.master')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Transaksi Travel</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data</li>
            </ol>
            @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                
            </div>
            @endif
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Transaksi Travel
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>HP/WA</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Tujuan</th>
                                <th>Harga</th>
                                <th>Jenis Travel</th>
                                <th>Bukti Pembayaran</th>
                                <th>Status</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>HP/WA</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Tujuan</th>
                                <th>Harga</th>
                                <th>Jenis Travel</th>
                                <th>Bukti Pembayaran</th>
                                <th>Status</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($transaction as $item)
                                
                            <tr>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->user->hp }}</td>
                                <td>{{ $item->created_at->format('Y-M-d H:i:s') }}</td>
                                <td>{{ $item->travel->name }}</td>
                                <td>{{ $item->travel->harga }}</td>
                                <td>{{ $item->travel->jenis }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $item->slip) }}" alt="Foto Bukti Pembayaran"
                                    style="width: 50px;;">
                                </td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $item->id) }}" class="btn btn-info">Lihat</a>
                                </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Bolinggo Tour & Travel, 2022</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection