@extends('app.master')

@section('konten')

<header class="container bg-purple mt-3 text-center shadow-lg p-2 mb-2 bg-body rounded">
    <h3>TIMELINE HARIAN UNIT TEKNOLOGI INFORMATIKA</h3>
</header>

<div class="container">
    <div class="card" style="width: auto;">
        <div class="row">
            <div class="card-body">
                <div class="col-lg col-sm">
                    <form method="POST">
                        <h5 for="" class="bg-warning col text-white text-center shadow-sm p-2 bg-body rounded">Laporan
                            Kegiatan</h5>
                        <div class="f-group">
                            <div class="f-group">
                                <label for="">Kode Laporan</label>
                                <input type="text" class="form-control mb-3" name="kd_laporan"
                                    placeholder="Kosongkan Saja!">
                            </div>
                            <label for="">Tanggal</label>
                            <input type="date" id="" name="tgl_kegiatan" placeholder="" class="form-control tgl_now"
                                required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Kegiatan / Perbaikan / Instalasi Baru</label>
                            <textarea class="form-control" name="perbaikan" id="" rows="3"
                                required="Silahkan lengkapi dulu!"></textarea>
                        </div>
                        <div class="f-group">
                            <label for="">Lokasi Unit / Ins.</label>
                            <input type="text" class="form-control" name="lokasi">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Analisis</label>
                            <textarea class="form-control" name="analisis" id="" rows="3"
                                required="Silahkan lengkapi dulu!"></textarea>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Penanganan</label>
                            <textarea class="form-control" name="penanganan" id="" rows="3"
                                required="Silahkan lengkapi dulu!"></textarea>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Jenis Error / Kegiatan</label>
                            <select class="form-control" name="jenis_error">
                                <option value="-">--Choose--</option>
                                <option value="hardware">Hardware</option>
                                <option value="software">Software</option>
                                <option value="instalasi">Instalasi</option>
                                <option value="lain">Lain-lain</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Keterangan / Rekomendasi</label>
                            <textarea class="form-control" name="keterangan" id="" rows="3"
                                required="Silahkan lengkapi dulu!"></textarea>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <button type="sumbit" name="save"
                                class="btn btn-success btn btn-primary btn-sm mr-1">Simpan</button>
                            <button type="submit" name="update"
                                class="btn btn-warning btn btn-primary btn-sm mr-1">Update</button>
                            <button type="reset" class="btn btn-danger btn btn-primary btn-sm">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection