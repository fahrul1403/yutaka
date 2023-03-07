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
                            <thead class=" text-primary">
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
                                <th class="text-right">
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
                                <th class="text-right">
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
                                    <td class="text-right">
                                        Longgar
                                    </td>
                                    <td>
                                        OK
                                    </td>
                                    <td>
                                        OK
                                    </td>
                                    <td class="text-right">
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

        </table>
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
                                <thead class=" text-primary">
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
                                    <th class="text-right">
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
                                    <th class="text-right">
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
                                    <th class="text-right">
                                        Jr.
                                        Analyst
                                    </th>
                                    <th>Action</th>
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
                                        <td class="text-right">
                                            Longgar
                                        </td>
                                        <td>
                                            OK
                                        </td>
                                        <td>
                                            OK
                                        </td>
                                        <td class="text-right">
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

                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group row">
                                                                    <h5 class="col-sm-2 col-form-label">Delivery Time
                                                                    </h5>
                                                                    <div class="col-sm-10">
                                                                        <input type="date" class="form-control"
                                                                            placeholder="dd/mm/yyyy">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h5 class="col-sm-2 col-form-label">Item Name</h5>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h5 class="col-sm-2 col-form-label">Item Numb</h5>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h5 class="col-sm-2 col-form-label">Supplier Name
                                                                    </h5>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h5 class="col-sm-2 col-form-label">Jumlah</h5>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h5 class="col-sm-2 col-form-label">IDR</h5>
                                                                    <div class="col-sm-10">
                                                                        <i class="bi bi-camera-fill"> Camera<input
                                                                                type="file"
                                                                                accept="image/*;capture=camera"></i>
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