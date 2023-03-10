@extends('layouts.app', [
'class' => '',
'elementActive' => 'tables'
])

@section('content')


<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> SUPPLIER TABLE</h4>
                </div>
                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        ADD NEW
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">New Supply Part</h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="{{ route('supplier') }}">
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <h5 class="col-sm-2 col-form-label">Delivery Time</h5>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" placeholder="dd/mm/yyyy"
                                                    name="delivery_date" id="date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="col-sm-2 col-form-label">Item Name</h5>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="itemName" name="itemName">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="col-sm-2 col-form-label">Item Numb</h5>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="itemNumb" name="itemNumb">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="col-sm-2 col-form-label">Supplier Name</h5>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="supplierName"
                                                    name="supplierName">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="col-sm-2 col-form-label">Jumlah</h5>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="jumlah" name="jumlah">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="col-sm-2 col-form-label">IDR</h5>
                                            <div class="col-sm-10">
                                                <input class="bi bi-camera-fill"> Camera<input type="file"
                                                    accept="image/*;capture=camera">
                                                </input>
                                                </i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
                            </thead>
                            <tbody>
                                {{-- @foreach($suppliers as $data)
                                <tr>
                                    <td>
                                        {{ $data->delivery_date }}
                                    </td>
                                    <td>
                                        {{ $data->item_number }}
                                    </td>
                                    <td>
                                        {{ $data->item_name }}
                                    </td>
                                    </td>
                                    <td>
                                        {{ $data->id }}
                                    </td>
                                    <td>
                                        {{ $data->quantity }}
                                    </td>
                                    <td>
                                        {{ $data->satuan }}
                                    </td>
                                    <td>
                                        {{ $data->millsheet }}
                                    </td>
                                    <td class="text-right">
                                        {{ $data->jenis_inspeksi }}
                                    </td>
                                    <td>
                                        {{ $data->visual_hasil_check }}
                                    </td>
                                    <td>
                                        {{ $data->dimensi }}
                                    </td>
                                    <td class="text-right">
                                        {{ $data->hasil_trial_line }}
                                    </td>
                                    <td>
                                        {{ $data->kasus_reject }}
                                    </td>
                                    <td>
                                        {{ $data->inspector_incoming }}
                                    </td>
                                    <td>
                                        {{ $data->jr_analisis }}
                                    </td>
                                </tr>
                                @endforeach --}}
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
                        <h4 class="card-title"> PART DI TOLAK</h4>
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
                                            <div>
                                                <!-- Button trigger modal -->


                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalLong" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalLongTitle"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">New
                                                                    Supply Part</h5>

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



                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="button"
                                                                    class="btn btn-primary">Submit</button>
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