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
                                <form method="post" action="{{ route('supplier.data.create') }}">
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <h5 class="col-sm-4 col-form-label">Delivery Time</h5>
                                            <div class="col-sm-7">
                                                <input id="date" name="delivery_date" type="date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="col-sm-4 col-form-label">Item Name</h5>
                                            <select name="item_name">
                                                @foreach ($items as $data)
                                                 <option name='name' value="{{ $data->name }}"> {{ $data->name }} </option>
                                                @endforeach
                                              </select>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="col-sm-4 col-form-label">Item Numb</h5>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="itemNumb" name="item_number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="col-sm-4 col-form-label">Supplier Name</h5>
                                            <div class="btn-group">
                                                <select name="supplier_name">
                                                @foreach ($users as $data)
                                                    @if ($data->role_id === 3)
                                                        <option value="{{ $data->name }}"> {{ $data->name }} </option>
                                                    @endif
                                                @endforeach
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="col-sm-4 col-form-label">Jumlah</h5>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="jumlah" name="jumlah">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="col-sm-4 col-form-label">Satuan</h5>
                                            <div class="col-sm-7">
                                                <option selected="selected">
                                                    Pcs
                                                </option>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="col-sm-4 col-form-label">IDR</h5>
                                            <div action="upload.php" method="post" enctype="multipart/form-data">
                                                <input type="file" name="gambar">
                                                <input type="submit" name="submit" value="Ambil Gambar">
                                            </div>

                                            <div id="hasil-gambar"></div>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
                            <tbody align="center">
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