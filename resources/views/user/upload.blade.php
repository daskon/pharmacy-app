@extends('user.home')

@section('bar')
    <span class="text-muted float-right">Home / Precription</span>
@endsection

@section('connect')
    <div class="col-8 mt-3 mx-auto">
        <div class="card">

            <div class="card-header">
                <span class="font-weight-bold">Upload Your Prescription</span>
                <a href="{{url('user-dashboard')}}" class="btn btn-success float-right">
                    <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back
                </a>
            </div>

            <div class="card-body">
                <form action="precription-store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control " value="{{ Auth()->user()->id }}" name="user_id" hidden>
                    </div>

                    <div class="form-group">
                        <label for="">Note</label>
                        <input type="text" class="form-control @error('note') is-invalid @enderror" name="note"
                            value="{{ old('note') }}">

                        @error('note')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Delivery Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                            value="{{ old('address') }}">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Delivery Time</label>
                        <input type="time" class="form-control @error('time') is-invalid @enderror" name="time"
                            value="{{ old('time') }}">
                        @error('time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Upload Images</label>
                                <input type="file" class="form-control
                                @error('images') is-invalid @enderror"
                                    name="images[]"
                                    accept="image/png, image/jpeg, image/jpg"
                                    multiple>
                                @error('images')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Create</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

