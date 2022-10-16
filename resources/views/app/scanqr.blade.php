@extends('app.master')

@section('konten')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Check-In Lokasi</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="">
            <div class="card-header bg-info">
                <h3 class="card-title">QR Zone</h3>
            </div>
        </div>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <div id="reader" width="600px"></div>
                </div>
            </div>
            <div class="wrapper col">
                <div class="form">
                    <input type="text" class="form-control mt-2 " id="hasil"
                        placeholder="Scan QR Code Sampai Muncul Nama Lokasi di Sini..." readonly>
                    <input type="hidden" class="form-control mt-2 tgl_now" id="date" readonly>
                    <input type="hidden" class="form-control mt-2 jam_now" id="time" readonly>
                    <button class="btn btn-success mt-2 mb-3 float-right">Generate QR Code</button>
                </div>
            </div>

            <div class="container">
                <div class="qr-code mt-3 col">
                    <img src="" class="">
                    <form method="post" action="{{route('store')}}">
                        @csrf
                        <input type="hidden" name="nm_petugas" value="{{ auth()->user()->name}}">
                        <input type="hidden" name="lokasi" id="hasil2">
                        <input type="hidden" name="tanggal" class="form-control mt-2 tgl_now" id="tanggal">
                        <input type="hidden" name="jam" class="form-control mt-2 jam_now" id="jam">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    </body>

    </html>

    @endsection