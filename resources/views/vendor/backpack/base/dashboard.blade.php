@extends(backpack_view('blank'))


@section('content')
    <div class="row">
        <div class="col-6 col-lg-3">
        <div class="card">
            <div class="card-body p-3 d-flex align-items-center"><i class="la la-users bg-primary p-3 font-2xl mr-3"></i>
            <div>
                <div class="text-value-sm text-primary">{{$tessss}}</div>
                <div class="text-muted text-uppercase font-weight-bold small">Dewasa</div>
            </div>
            </div>
        </div>
        </div>
        <!-- /.col-->
        <div class="col-6 col-lg-3">
        <div class="card">
            <div class="card-body p-3 d-flex align-items-center"><i class="la la-users bg-info p-3 font-2xl mr-3"></i>
            <div>
                <div class="text-value-sm text-info">$1.999,50</div>
                <div class="text-muted text-uppercase font-weight-bold small">Pemuda</div>
            </div>
            </div>
        </div>
        </div>
        <!-- /.col-->
        <div class="col-6 col-lg-3">
        <div class="card">
            <div class="card-body p-3 d-flex align-items-center"><i class="la la-users bg-warning p-3 font-2xl mr-3"></i>
            <div>
                <div class="text-value-sm text-warning">$1.999,50</div>
                <div class="text-muted text-uppercase font-weight-bold small">Remaja</div>
            </div>
            </div>
        </div>
        </div>
        <!-- /.col-->
        <div class="col-6 col-lg-3">
        <div class="card">
            <div class="card-body p-3 d-flex align-items-center"><i class="la la-users bg-danger p-3 font-2xl mr-3"></i>
            <div>
                <div class="text-value-sm text-danger">$1.999,50</div>
                <div class="text-muted text-uppercase font-weight-bold small">Anak</div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection