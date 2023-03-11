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
                                    @foreach($suppliers as $data)
                                    <tr>
                                        <td>
                                            {{ $data->created_at }}
                                        </td>
                                        <td>
                                            {{ $data->item_number }}
                                        </td>
                                        <td>
                                            {{ $data->item_name }}
                                        </td>
                                        </td>
                                        <td>
                                            SUP-{{ $data->id }}
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
                                            {{ $data->User->name }}
                                        </td>
                                        <td>
                                            {{ $data->jr_analisis }}
                                        </td>
                                    </tr>
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