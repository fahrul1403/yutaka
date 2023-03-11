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
                                    @csrf
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
                                                <select name="user_id">
                                                @foreach ($users as $data)
                                                    @if ($data->role_id === 3)
                                                        <option value="{{ $data->id }}"> {{ $data->name }} </option>
                                                    @endif
                                                @endforeach
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="col-sm-4 col-form-label">Jumlah</h5>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="jumlah" name="quantity">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="col-sm-4 col-form-label">Satuan</h5>
                                            <div class="col-sm-7">
                                                <select name="satuan">
                                                    <option selected="selected">
                                                        Pcs
                                                    </option>
                                                    <option>
                                                        Set
                                                    </option>
                                                </select>
                                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="col-sm-4 col-form-label">IDR</h5>
                                            <div action="" method="post" enctype="multipart/form-data">
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
                                @foreach ($suppliers as $data)
                                    @if($data->show_status == 'diterima')
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
                                        <td>
                                            {{ $data->supplier_id }}
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
                                        <td>
                                            {{ $data->jenis_inspeksi }}
                                        </td>
                                        <td>
                                            {{ $data->visual_hasil_check }}
                                        </td>
                                        <td>
                                            {{ $data->dimensi }}
                                        </td>
                                        <td>
                                            {{ $data->hasil_trial }}
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
                                    @endif
                                @endforeach
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
                                    @foreach ($suppliers as $data)
                                    @if($data->show_status == 'ditolak')
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
                                        <td>
                                            {{ $data->supplier_id }}
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
                                        <td>
                                            {{ $data->jenis_inspeksi }}
                                        </td>
                                        <td>
                                            {{ $data->visual_hasil_check }}
                                        </td>
                                        <td>
                                            {{ $data->dimensi }}
                                        </td>
                                        <td>
                                            {{ $data->hasil_trial }}
                                        </td>
                                        <td>
                                            {{ $data->kasus_reject }}
                                        </td>
                                        <td>
                                            {{ $data->User->id }}
                                        </td>
                                        <td>
                                            {{ $data->jr_analisis }}
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
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