@extends('layouts.app', [
'class' => '',
'elementActive' => 'inspector',
])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> INSPECTOR TABLE</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary" align="center">
                                <th>
                                    Delivery Date
                                </th>
                                <th>
                                    Item
                                    Number
                                </th>
                                <th>
                                    Item
                                    Name
                                </th>
                                <th>
                                    Supplier
                                    ID
                                </th>
                                <th>
                                    Qty
                                </th>
                                <th>
                                    Satuan
                                </th>
                                <th>IRD/COA/MIL
                                    LSHEET
                                </th>
                                <th>
                                    Jenis Inspeksi
                                </th>
                                <th>
                                    VISUAL
                                    HASIL CEK
                                </th>
                                <th>
                                    DIMENSI
                                    (INSP.JIG/CF)
                                </th>
                                <th>
                                    Hasil
                                    Trial
                                    Line
                                </th>
                                <th>
                                    KASUS REJECT
                                </th>
                                <th>
                                    INSPECTOR INCOMING
                                </th>
                                <th>
                                    Jr.
                                    Analyst
                                </th>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        05-Dec-2022
                                        15:00
                                    </td>
                                    <td>
                                        MB01005
                                        46
                                    </td>
                                    <td>CAP END
                                        COMP
                                        K84 </td>
                                    </td>
                                    <td>
                                        NG1
                                    </td>
                                    <td>
                                        400
                                    </td>
                                    <td>pcs
                                    </td>
                                    <td>
                                        OK
                                    </td>
                                    <td>
                                        Longgar
                                    </td>
                                    <td>
                                        OK
                                    </td>
                                    <td>
                                        OK
                                    </td>
                                    <td>
                                        N/A
                                    </td>
                                    <td>
                                        TIDAK ADA
                                    </td>
                                    <td>
                                        SETIAWAN
                                    </td>
                                    <td>
                                        N/A
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>


        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> INCOMING - WAITING FOR APPROVAL</h4>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table">
                                    <thead class=" text-primary" align="center">
                                        <th>
                                            Delivery Date
                                        </th>
                                        <th>
                                            Item
                                            Number
                                        </th>
                                        <th>
                                            Item
                                            Name
                                        </th>
                                        <th>
                                            Supplier
                                            ID
                                        </th>
                                        <th>
                                            Qty
                                        </th>
                                        <th>
                                            Satuan
                                        </th>

                                        <th>Approval</th>
                                    </thead>
                                    <tbody align="center">
                                        @foreach ($suppliers as $data )
                                        <tr>
                                            <td>
                                               {{ $data->delivery_date }}
                                            </td>
                                            <td>
                                                {{ $data->item_number }}
                                            </td>
                                            <td>
                                                {{ $data->item_name }} </td>
                                            </td>
                                            <td>
                                                SUP-{{ $data->User->id }}
                                            </td>
                                            <td>
                                                {{ $data->quantity }}
                                            </td>
                                            <td>pcs
                                            </td>
                                        @endforeach

                                            <td>
                                                <div>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModalLong">
                                                        CONFIRM
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalLong" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLongTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                                        KONFIRMASI</h5>

                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group row">
                                                                        <h5 class="col-sm-4 col-form-label">IRD Delivery
                                                                        </h5>

                                                                        <div class="btn-group">
                                                                            <button
                                                                                class="btn btn-secondary btn-sm dropdown-toggle"
                                                                                type="button" data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                Pilih
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="#">OK</a>
                                                                                <a class="dropdown-item" href="#">NG</a>
                                                                                <a class="dropdown-item" href="#">TIdak
                                                                                    ada</a>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <h5 class="col-sm-4 col-form-label">Jenis
                                                                            Inspeksi
                                                                        </h5>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-danger dropdown-toggle"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                Pilih
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="#">L</a>
                                                                                <a class="dropdown-item" href="#">N</a>
                                                                                <a class="dropdown-item" href="#">K</a>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <h5 class="col-sm-4 col-form-label">Hasil
                                                                            Visual
                                                                        </h5>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-danger dropdown-toggle"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                Pilih
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="#">OK</a>
                                                                                <a class="dropdown-item" href="#">NG</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <h5 class="col-sm-4 col-form-label">Cek
                                                                            Dimensi
                                                                        </h5>

                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-danger dropdown-toggle"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                Pilih
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="#">OK</a>
                                                                                <a class="dropdown-item" href="#">NG</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <h5 class="col-sm-4 col-form-label">Hasil
                                                                            Trial
                                                                        </h5>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-danger dropdown-toggle"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                Pilih
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="#">OK</a>
                                                                                <a class="dropdown-item" href="#">NG</a>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <h5 class="col-sm-4 col-form-label">Kasus
                                                                            Reject
                                                                        </h5>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <h5 class="col-sm-4 col-form-label">
                                                                            Inspector
                                                                        </h5>
                                                                        <div class="btn-group">
                                                                            <button
                                                                                class="btn btn-secondary btn-sm dropdown-toggle"
                                                                                type="button" data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                Pilih
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item"
                                                                                    href="#">FAHRUL</a>
                                                                                <a class="dropdown-item"
                                                                                    href="#">HAIKAL</a>
                                                                                <a class="dropdown-item"
                                                                                    href="#">SUITAMA</a>


                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-danger">TOLAK</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">APPROV</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection