@extends('layout.app')

@section('content')
<div class="container-fluid" style="padding:80px;">
    <div class="row">
        <div style=" text-align:center; margin-top:50px;" class="item-align:center">
            <div class="table-responsive " style="padding:100px; background-color:rgba(0.5, 0.5, 0.5, 0.1);">
                <div>
                    <h2 style="padding:10px;margin-top:-80px">Data Pengunjung</h2>
                </div><br>
                <form role="form" action="/check" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-1">
                            Nama
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>

                        <div class="col-md-2">
                            Alamat
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-1">
                            No Telp
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                        </div>
                    </div><br>
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col" width="80%">Sifat</th>
                                <th scope="col">Jawaban</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($gejalas as $gejala)
                            <tr>
                                <td>{{$gejala->kode}}</td>
                                <td>
                                    <input type="checkbox" id="gejala[]" name="gejala[]"
                                        value="{{$gejala->id}}"> Ya
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center text-mute" colspan="4">Data tidak tersedia</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table><br>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <!-- <button type="button" class="submit btn btn-primary" data-bs-toggle="modal" style="margin-left:990px"
                            data-bs-target="#exampleModal"> -->
                            <button class="submit btn btn-primary">
                            <i class="fa fa-search" aria-hidden="true">&nbsp&nbsp Cek</i>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- Recent Sales End -->

    @endsection