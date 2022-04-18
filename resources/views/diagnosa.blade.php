@extends('layout.app')

@section('content')
<div class="container-fluid" style="padding:80px;">
        <div class="row">
            <div style=" text-align:center; margin-top:50px;" class="item-align:center">
            <div class="table-responsive " style="padding:100px; background-color:rgba(0.5, 0.5, 0.5, 0.1);">
                <div>
                    <h2 style="padding:10px;margin-top:-80px">Pengisian data gejala pneumonia</h2>
                </div><br>
                <div class="row">
                    <div class="col-md-1">
                        Nama
                    </div>
                    <div class="col-md-1">
                        :
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-2">
                        Nama
                    </div>
                    <div class="col-md-1">
                        :
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control">
                    </div>
                </div><br>
                <div class="row">
                <div class="col-md-1">
                        Nama
                    </div>
                    <div class="col-md-1">
                        :
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control">
                    </div>
                </div><br>
                <table class="table text-start align-middle table-bordered table-hover mb-0" >
                            <thead >
                                <tr class="text-dark">
                                    <th scope="col">Kode Gejala</th>
                                    <th scope="col">Nama Gejala</th>
                                    <th scope="col">Jawaban</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>G001</td>
                                    <td>Gejala</td>
                                    <td>
                                    <label class="radio">
                                        <input type="radio" name="cfimb_5" id="id_cfimb_5_1" value="1">
                                        Ya
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="cfimb_5" id="id_cfimb_5_2" value="2">
                                        Tidak
                                    </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table><br>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" style="margin-left:990px" data-bs-target="#exampleModal">
                            <i class="fa fa-search" aria-hidden="true">&nbsp&nbsp Cek</i>
                            </button>
                        </div>
                    </div>

        </div>
        </div>
            <!-- Recent Sales End -->

            @endsection
