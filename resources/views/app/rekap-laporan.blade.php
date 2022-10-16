@extends('app.master')

@section('konten')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Rekap Laporan Patroli</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Soon</a></li>
                        <li class="breadcrumb-item active">Soon</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!-- /.card-header -->
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Rekap</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <form action="" method="">
                                <div class="form-gruop mb-3">
                                    <div class="form-inline">
                                        <input type="date" class="form-control  mr-1" name="start" value="" />
                                        <a>s/d</a>
                                        <input type="date" class="form-control ml-1" name="end" value="" />
                                        <button type="submit" name="cari" class="btn btn-primary ml-3">Search</button>
                                    </div>
                                </div>
                            </form>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Jenis Perbaikan</th>
                                        <th>Lokasi</th>
                                        <th>Analisis</th>
                                        <th>penanganan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

</body>

</html>
@endsection