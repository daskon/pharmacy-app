@extends('user.home')

@section('bar')
    <span class="float-right">Home / Dashboard</span>
@endsection

@section('connect')
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content bg-warning">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-book-open primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>{{$totalPrecription}}</h3>
                      <a href="{{ url('history') }}" class="text-dark">
                      <span>Total Prescription</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content bg-success">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-chemistry primary font-large-2 float-left text-white"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3 class="text-white">{{$accept}}</h3>
                      <a href="" class="text-white">
                      <span>Accept Prescription</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content bg-danger">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-chemistry primary font-large-2 float-left text-white"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3 class="text-white">{{$reject}}</h3>
                      <a href="" class="text-white">
                      <span>Rejected Prescription</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content bg-info">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-social-dropbox primary font-large-2 float-left text-white"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3 class="text-white">{{$pending}}</h3>
                      <a href="{{url('quotation')}}" class="text-white">
                      <span>Quotations</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection

