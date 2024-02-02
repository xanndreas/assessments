@extends('layouts.app')


@section('scripts')
    <script type="module">
        $(".select-customers").on('change', function (e) {
            $.get('{{ route('home.history') }}', {customer_id: $(this).val()}, function (data) {
                $(".tbody-customer").html(data.raw);
                $(".address-customer").text(data.address);
            });
        });
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sample Mockup</div>

                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Customer</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select-customers">
                                            <option>Please Select</option>
                                            @foreach($customers as $it )
                                                <option value="{{ $it->id }}">{{ $it->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="mb-3">
                            <p class="fs-5 mb-1">Alamat</p>
                            <p class="text-body address-customer">Alamat</p>
                        </div>
                        <div class="mb-3">
                            <p class="fs-5 mb-1">Penjualan</p>
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer Name</th>
                                    <th>Customer Description</th>
                                    <th>Sales Total</th>
                                    <th>Time</th>
                                </tr>
                                </thead>
                                <tbody class="tbody-customer">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
