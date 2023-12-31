@extends('Admin.Layout.layoutAdmin')
@section('title', 'Riwayat Transaksi')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Riwayat Transaksi Pembayaran</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Riwayat Transaksi Pembayaran</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID TRANSAKSI</th>
                                <th>ID CUSTOMER</th>
                                <th>MEREK MOBIL</th>
                                <th>TANGGAL SEWA</th>
                                <th>TANGGAL PENGEMBALIAN</th>
                                <th>DURASI SEWA</th>
                                <th>TOTAL BAYAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksis as $transaksi)
                                <tr>
                                    <td>{{ $transaksi->id_transaksi }}</td>
                                    <td>{{ $transaksi->id_customer }}</td>
                                    <td>{{ $transaksi->sewa->mobil->merek_mobil }}</td>
                                    <td>{{ $transaksi->sewa->tanggal_sewa }}</td>
                                    <td>{{ $transaksi->sewa->tanggal_pengembalian }}</td>
                                    <td>{{ $transaksi->durasi_sewa }} hari</td>
                                    <td>Rp. {{ number_format($transaksi->total_bayar, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
