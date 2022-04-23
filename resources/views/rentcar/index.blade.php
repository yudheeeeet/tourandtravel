@extends('layoutAdmin.master')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Konten Rentcar</h3>
            <ol class="breadcrumb mb-4">
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
                    <a href="{{ url('/rentcar/data/create') }}" class="btn btn-primary">Tambah Data Baru</a>
                </div>
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Konten Rentcar
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Plat</th>
                                <th>Warna</th>
                                <th>STNK</th>
                                <th>BPKB</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Tanggal Penambahan</th>
                                <th>Tanggal Pembaruan</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Plat</th>
                                <th>Warna</th>
                                <th>STNK</th>
                                <th>BPKB</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Tanggal Penambahan</th>
                                <th>Tanggal Pembaruan</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($rentcar as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto Mobil"
                                    style="width: 50px;;">
                                </td>
                                <td>{{ $item->plat }}</td>
                                <td>{{ $item->warna }}</td>
                                <td>{{ $item->stnk }}</td>
                                <td>{{ $item->bpkb }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->created_at->format('Y-M-d H:i:s') }}</td>
                                <td>{{ $item->updated_at->format('Y-M-d H:i:s') }}</td>
                                <td>
                                    <a href="{{ url('/rentcar/data' . '/' . $item->id . '/edit') }}"
                                        class="btn btn-warning">Edit</a>
                                        <form action="{{ url('/rentcar/data' . '/' . $item->id) }}" method="POST">
                                            @csrf
                                            
                                            @method("DELETE")
                                            <button class="btn btn-danger" type="submit">Hapus</button>
                                        </form>
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
    </div>
    @endsection
    