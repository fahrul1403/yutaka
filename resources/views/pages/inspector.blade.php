@extends('layouts.app', [
'class' => '',
'elementActive' => 'inspector',
])

@section('content')
<div class="content">
    <div class="row">

        {{-- inpector checking --}}

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
                                            @if($data->show_status == 'ditinjau')
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
                                                <td>
                                                    {{ $data->id }}
                                                </td>
    
                                                <td>
                                                    <div>
                                                        <!-- Button trigger modal -->
                                                        
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModalLong{{ $data->id }}">
                                                    CONFIRM
                                                </button>
                                                        
                                                        <!-- Modal -->
                                                    <form action="{{ route('supplier.data.store') }}" method="post">
                                                            @csrf
                                                        <div class="modal fade" id="exampleModalLong{{ $data->id }}" tabindex="-1"
                                                            role="dialog" aria-labelledby="exampleModalLongTitle"
                                                            aria-hidden="true">
                                                           <div class="modal-dialog" role="document">
                                                               <div class="modal-content">
                                                                   <div class="modal-header">
                                                                       <h5 class="modal-title" id="exampleModalLongTitle">KONFIRMASI</h5>
                                       
                                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                           <span aria-hidden="true">&times;</span>
                                                                       </button>
                                                                       <input type="hidden" value="{{ $data->id }}">
                                                                   </div>
                                                                    <div class="modal-body">
                                                                    
                                                                        <div class="form-group row">
                                                                            <h5 class="col-sm-4 col-form-label">IRD Delivery
                                                                            </h5>
    
                                                                            <div class="btn-group">
                                                                                <select name="ird" class="btn btn-secondary btn-sm">
                                                                                    <option value="">Pilih</option>
                                                                                    <option value="OK">OK</option>
                                                                                    <option value="NG">NG</option>
                                                                                    <option value="Tidak ada">Tidak ada</option>
                                                                                  </select>
                                                                                  
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <h5 class="col-sm-4 col-form-label">Jenis
                                                                                Inspeksi
                                                                            </h5>
                                                                            <div class="btn-group">
                                                                                <select name="jenis_inspeksi" class="btn btn-secondary btn-sm">
                                                                                    <option value="">Pilih</option>
                                                                                    <option value="L">L</option>
                                                                                    <option value="N">N</option>
                                                                                    <option value="K">K</option>
                                                                                  </select>
                                                                                  
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <h5 class="col-sm-4 col-form-label">Hasil
                                                                                Visual
                                                                            </h5>
                                                                            <div class="btn-group">
                                                                                <select name="hasil_visual" class="btn btn-secondary btn-sm">
                                                                                    <option value="">Pilih</option>
                                                                                    <option value="OK">OK</option>
                                                                                    <option value="NG">NG</option>
                                                                                  </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <h5 class="col-sm-4 col-form-label">Cek
                                                                                Dimensi
                                                                            </h5>
    
                                                                            <div class="btn-group">
                                                                                <select name="dimensi" class="btn btn-secondary btn-sm">
                                                                                    <option value="">Pilih</option>
                                                                                    <option value="OK">OK</option>
                                                                                    <option value="NG">NG</option>
                                                                                  </select>
                                                                            </div>
                                                                        </div>
    
                                                                        <div class="form-group row">
                                                                            <h5 class="col-sm-4 col-form-label">Hasil
                                                                                Trial
                                                                            </h5>
                                                                            <div class="btn-group">
                                                                                <select name="hasil_trial_line" class="btn btn-secondary btn-sm">
                                                                                    <option value="">Pilih</option>
                                                                                    <option value="OK">OK</option>
                                                                                    <option value="NG">NG</option>
                                                                                  </select>
    
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <h5 class="col-sm-4 col-form-label">Kasus
                                                                                Reject
                                                                            </h5>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" name="kasus_reject" class="form-control">
                                                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                                                            </div>
                                                                        </div>
    
                                                                        <div class="form-group row">
                                                                            <h5 class="col-sm-4 col-form-label">
                                                                                Inspector
                                                                            </h5>
                                                                            <div class="btn-group">
                                                                            <select name="user_id" class="btn btn-secondary btn-sm">
                                                                                @foreach ($users as $data)
                                                                                    @if ($data->role_id === 2)
                                                                                        <option value="{{ $data->name }}"> {{ $data->name }} </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                            </div>
                                                                        </div>
    
                                                                        <div class="form-group row">
                                                                            <label>
                                                                                <input type="radio" name="status" value="diterima">
                                                                                TERIMA
                                                                              </label>
                                                                              <label>
                                                                                <input type="radio" name="status" value="ditolak">
                                                                                TOLAK
                                                                            </label>
                                                                        </div>
    
                                                                       
    
                                                                        <div class="modal-footer">
                                                                    
                                                                              <button type="submit" class="btn btn-primary">Submit</button>
                                                                           
                                                                          </div>
                                                                          
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
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


    </div>
</div>
</div>
</div>
@endsection