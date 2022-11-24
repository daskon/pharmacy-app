@extends('Admin.home')

@section('bar')
    <span class="text-muted float-right">Home / Dashboard</span>
@endsection

@section('connect')
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content bg-danger">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>{{$newMedicines}}</h3>
                      <a href="{{ url('precribtion-list') }}" class="text-white">
                      <span>New Prescription</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content bg-info">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-user primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>{{$customers}}</h3>
                      <a href="{{ url('customers') }}" class="text-white">
                      <span>Total Customers</span>
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
                      <i class="icon-chemistry primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>{{$accept}}</h3>
                      <a href="{{ url('accept') }}" class="text-white">
                      <span>Accept Prescription</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="row mt-lg-3">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content bg-secondary">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-chemistry primary font-large-2 float-left text-white"></i>
                    </div>
                    <div class="media-body text-right text-white">
                      <h3>{{$pending}}</h3>
                      <a href="{{ url('pending') }}" class="text-white">
                      <span>Pending Prescription</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content bg-dark">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-chemistry primary font-large-2 float-left text-white"></i>
                    </div>
                    <div class="media-body text-right text-white">
                      <h3>{{$reject}}</h3>
                      <a href="{{ url('reject') }}" class="text-white">
                      <span>Reject Prescription</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content bg-warning">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-book-open primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>{{$medicines}}</h3>
                      <a href="{{ url('medicine-list') }}" class="text-dark">
                      <span>Total Medicines</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection

