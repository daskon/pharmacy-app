@extends('Admin.home')

@section('bar')
    <span class="text-muted float-right">Home / Uploaded Prescriptions</span>
@endsection

@section('connect')
    <div class="card">
        <div class="card-header">
            <span class="font-weight-bold">Uploaded Prescriptions</span>
            <a href="{{ url('precribtion-list') }}" class="btn btn-success float-right">
                <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back</a>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-5 border">
                    <table class="mx-auto">
                        <tr>
                            <td colspan="5" class="text-center">
                                <a href="{{ '../images/'. $user_drugs->images[1] }}"
                                    target="_blank">
                                <img src="{{ '../images/'. $user_drugs->images[1] }}" alt=""
                                        width="250" height="250" class="borderd"></a>
                            </td>
                        </tr>
                        <tr>
                            @if(!empty($user_drugs->images[2]))
                            <td>
                                <a href="{{ '../images/'. $user_drugs->images[2] }}" target="_blank"><img
                                        src="{{ '../images/'. $user_drugs->images[2] }}" alt="" width="120"
                                        height="110"></a>
                            </td>
                            @endif
                            @if(!empty($user_drugs->images[3]))
                            <td>
                                <a href="{{ '../images/'. $user_drugs->images[3] }}" target="_blank"><img
                                        src="{{ '../images/'. $user_drugs->images[3] }}" alt="" width="120"
                                        height="110"></a>
                            </td>
                            @endif
                            @if(!empty($user_drugs->images[4]))
                            <td>
                                <a href="{{ '../images/'. $user_drugs->images[4] }}" target="_blank"><img
                                        src="{{ '../images/'. $user_drugs->images[4] }}" alt="" width="120"
                                        height="110"></a>
                            </td>
                            @endif
                            @if(!empty($user_drugs->images[5]))
                            <td>
                                <a href="{{ '../images/'. $user_drugs->images[5] }}" target="_blank"><img
                                        src="{{ '../images/'. $user_drugs->images[5] }}" alt="" width="120"
                                        height="110"></a>
                            </td>
                            @endif
                        </tr>

                    </table>
                </div>

                <div class="col-12 col-lg-7">

                    <table class="table">
                        <thead class="table-success">
                            <tr>
                                <th>Drugs</th>
                                <th>Quanity</th>
                                <th>Amount</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php $i=1; @endphp
                            @php $total=0; @endphp
                          @forelse ($data as $row)
                            <tr>
                                <td>{{$row->Medicine->drugs}}</td>
                                <td class="text-right">{{$row->Medicine->amount}} x {{$row->quanity}}</td>
                                <td class="text-right">{{$row->amount}}</td>
                                @php $total+= $row->amount; @endphp
                            </tr>
                          @empty
                            <tr>
                                <td colspan="3" class="text-danger text-center">
                                    <span class="text-success">No Data Records</span>
                                </td>
                            </tr>
                          @endforelse

                            <tr>
                                <td colspan="2" class="text-center">
                                    Total
                                </td>
                                <td class="text-right">
                                    {{$total}}.00
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <form action="{{ url('quot-add') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-6 col-form-label text-right">Drug</label>
                            <div class="col-6">
                                <select class="form-control drug_name @error('drug_name') is-invalid @enderror"
                                    name="drug_name">
                                    <option value="" selected disabled>-Select Drugs Name-</option>
                                    @foreach ($drug as $row)
                                        <option value="{{ $row->id }}">{{ $row->drugs }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-6 col-form-label text-right">Quantity</label>
                            <div class="col-6">
                                <input type="number" class="form-control @error('quanity') is-invalid @enderror"
                                    id="inputPassword3" placeholder="Quantity" name="quanity">

                                @error('quanity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="number" name="drug_price" id="price"
                                class="form-control drug_price @error('drug_price') is-invalid @enderror" hidden>
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control @error('prescription_id') is-invalid @enderror"
                                value="{{ $user_drugs->id }}" name="prescription_id" hidden>

                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control @error('user_id') is-invalid @enderror"
                                value="{{ $user_drugs->user->id }}" name="user_id" hidden>
                        </div>

                        <input type="text" value="1" name="order" hidden>
                        <input type="text" value="{{$user_drugs->id}}" name="id" hidden>

                        <div class="text-right">
                            <button class="btn btn-success" type="submit">Add</button>
                        </div>

                        <hr>
                    </form>
                    <div class="text-right">
                        <button class="btn btn-success">Send Quotation</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('ajax')
    <script>
        $(document).ready(function() {
            $(document).on('change', '.drug_name', function() {
                var get_id = $(this).val();

                var a = $(this).parent();
                var op = "";
                $.ajax({
                    type: "get",
                    url: '{!! URL::to('findPrice') !!}',
                    data: {
                        'id': get_id
                    },
                    dataType: 'json',
                    success: function(data) {
                        $(".drug_price").val(data.amount);
                    }
                });
            });
        });
    </script>
@endsection
