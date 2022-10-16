@extends('app.master')

@section('konten')

{{-- <style>
    .modal-header {
        background-color: #2EC6AC;
    }

    .modal-content {
        padding-top: ;
        border-radius: 0;
        border: 5px solid #2EC6AC;
    }
</style> --}}

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola User Login dan Akses</h1>
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
                            <h3 class="card-title">Inventory Unit IT</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                data-bs-target="#addBarang">
                                Add Barang +
                            </button>

                            <div class="modal fade" id="addBarang" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Data
                                                Inventory</h5>
                                            <!-- <button type="button" class="btn-close btn" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" name="insert_form" id="insert_form">
                                                <div class="f-group">
                                                    <label for="">Unit/Ins/Ruang</label>
                                                    <input type="text" placeholder="Unit/Ins/Ruang" name="unit"
                                                        class="form-control">
                                                </div>
                                                <div class="f-group">
                                                    <label for="" class="mt-3">Kode Barang</label>
                                                    <input type="text" placeholder="Kode" name="kd_brg"
                                                        class="form-control">
                                                </div>
                                                <div class="f-group">
                                                    <label for="" class="mt-3">Tipe Barang</label>
                                                    <input type="text" placeholder="Tipe Barang" name="tipe_brg"
                                                        class="form-control">
                                                </div>
                                                <div class="f-group">
                                                    <label for="" class="mt-3">Nama Barang / Merek</label>
                                                    <input type="text" placeholder="Brand / Merek" name="nm_brg"
                                                        class="form-control">
                                                </div>
                                                <div class="f-group">
                                                    <label for="" class="mt-3">Spesifikasi</label>
                                                    <input type="text" placeholder="Spesifikasi" name="spec"
                                                        class="form-control">
                                                </div>
                                                <div class="f-group">
                                                    <label for="" class="mt-3">Tanggal Instalasi Awal</label>
                                                    <input type="date" placeholder="Nama Pasien" name="tgl_ins"
                                                        class="form-control">
                                                </div>
                                                <div class="f-group">
                                                    <label for="" class="mt-3">Status/Kondisi</label>
                                                    <input type="text" placeholder="Status/Kondisi" name="status"
                                                        class="form-control">
                                                </div>
                                                <div class="f-group">
                                                    <label for="" class="mt-3">Last Maintenance</label>
                                                    <input type="date" placeholder="Nama Pasien" name="last_maintenance"
                                                        class="form-control">
                                                </div>
                                                <div class="f-group">
                                                    <label for="" class="mt-3">Note</label>
                                                    <textarea name="note" id="note" cols="5"
                                                        class="form-control"></textarea>
                                                </div>
                                                <button type="submit" name="insert" id="insert"
                                                    class="btn btn-success mt-3 ml-2 float-right">Save</button>
                                                <button type="button" class="btn btn-danger mt-3 float-right"
                                                    data-bs-dismiss="modal">Close</button>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                            <!-- <form action="" method="post">
                                        <div class="form-gruop mb-3">
                                            <div class="form-inline">
                                                <input type="date" class="form-control  mr-1" name="start" value="" />
                                                <a>s/d</a>
                                                <input type="date" class="form-control ml-1" name="end" value="" />
                                                <button type="submit" name="cari" class="btn btn-primary ml-3">Search</button>
                                            </div>
                                        </div> -->
                            </form>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Unit/Ins/Ruang</th>
                                        <th>Kode Barang</th>
                                        <th>Tipe Barang</th>
                                        <th>Nama Barang/Merek</th>
                                        <th>Spesifikasi</th>
                                        <th>Tanggal Instalasi</th>
                                        <th>Status Kondisi</th>
                                        <th>Last Maintenance</th>
                                        <th>Note</th>
                                        <th>Action</th>
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
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td><button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#myModal1">Edit</button></td>
                                    </tr>
                                    <div class="modal fade" id="myModal1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-white" id="Label">Edit Data Inventory
                                                    </h5>
                                                    <!-- <button type="button" class="btn-close btn" data-dismiss="modal" aria-label="Close"></button> -->
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="post" name="" id="">

                                                        <div class="f-group">
                                                            <label for="">Unit/Ins/Ruang</label>
                                                            <input type="text" placeholder="Unit/Ins/Ruang" name="unit"
                                                                class="form-control" value="<?php  ?>">
                                                        </div>
                                                        <div class="f-group">
                                                            <label for="" class="mt-3">Kode Barang</label>
                                                            <input type="text" placeholder="Kode" name="kd_brg"
                                                                class="form-control" value="<?php ?>">
                                                        </div>
                                                        <div class="f-group">
                                                            <label for="" class="mt-3">Tipe Barang</label>
                                                            <input type="text" placeholder="Tipe Barang" name="tipe_brg"
                                                                class="form-control" value="<?php  ?>">
                                                        </div>
                                                        <div class="f-group">
                                                            <label for="" class="mt-3">Nama Barang / Merek</label>
                                                            <input type="text" placeholder="Brand / Merek" name="nm_brg"
                                                                class="form-control" value="<?php  ?>">
                                                        </div>
                                                        <div class="f-group">
                                                            <label for="" class="mt-3">Spesifikasi</label>
                                                            <input type="text" placeholder="Spesifikasi" name="spec"
                                                                class="form-control" value="<?php  ?>">
                                                        </div>
                                                        <div class="f-group">
                                                            <label for="" class="mt-3">Tanggal Instalasi Awal</label>
                                                            <input type="date" placeholder="Nama Pasien" name="tgl_ins"
                                                                class="form-control" value="<?php  ?>">
                                                        </div>
                                                        <div class="f-group">
                                                            <label for="" class="mt-3">Status/Kondisi</label>
                                                            <input type="text" placeholder="Status/Kondisi"
                                                                name="status" class="form-control" value="<?php  ?>">
                                                        </div>
                                                        <div class="f-group">
                                                            <label for="" class="mt-3">Last Maintenance</label>
                                                            <input type="date" placeholder="Nama Pasien"
                                                                name="last_maintenance" class="form-control"
                                                                value="<?php  ?>">
                                                        </div>
                                                        <div class="f-group">
                                                            <label for="" class="mt-3">Note</label>
                                                            <textarea name="note" id="note" col="5"
                                                                class="form-control"><?php  ?></textarea>
                                                        </div>
                                                        <button type="submit" name="update" id="update"
                                                            class="btn btn-success mt-3 ml-2 float-right">Update</button>
                                                        <button type="button" class="btn btn-danger mt-3 float-right"
                                                            data-dismiss="modal">Close</button>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
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