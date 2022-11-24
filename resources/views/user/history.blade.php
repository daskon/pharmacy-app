@extends('user.home')

@section('bar')
    <span class="text-muted float-right">Home / Precription History</span>
@endsection

@section('connect')
    <div class="card">
        <div class="card-header">
            <span class="font-weight-bold">Prescription History</span>
            <a href="{{url('user-dashboard')}}" class="btn btn-success float-right">
                <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back</a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead class="table-success">
                    <tr>
                        <th>#</th>
                        <th>Note</th>
                        <th>Delivery To</th>
                        <th>Time</th>
                        <th colspan="5" class="text-center">Images</th>
                    </tr>
                </thead>
                @php $i=1; @endphp
                <tbody>
                    @forelse ($records as $row)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $row->note }}</td>
                            <td>{{ $row->address }}</td>
                            <td>{{ $row->time }}</td>
                            @foreach ($row->images as $k => $v)
                                <td class="text-center">
                                    <a href="{{ 'images/'.$v }}" target="_blank">
                                    <img src="{{ 'images/'.$v }}" alt="" width="50px" height="50px"
                                        class="rounded-circle"></a>
                                </td>
                            @endforeach
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center text-danger" colspan="8">No Data Record</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
@endsection

