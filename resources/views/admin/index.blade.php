@extends('layoutAdmin.master')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Transaksi Rentcar</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Transaksi Rentcar
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>HP/WA</th>
                                <th>Tanggal</th>
                                <th>Mobil</th>
                                <th>Plat</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>HP/WA</th>
                                <th>Tanggal</th>
                                <th>Mobil</th>
                                <th>Plat</th>
                                <th>Harga</th>
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
                                <td>{{ $item->rentcar->name }}</td>
                                <td>{{ $item->rentcar->plat }}</td>
                                <td>{{ $item->rentcar->harga }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="{{ url('admin/edit/' . $item->id) }}" class="btn btn-info">Lihat</a>
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