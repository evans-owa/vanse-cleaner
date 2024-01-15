<head>
    <title>My Request</title>
</head>
@include('header1')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="">My Request</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tracing number</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                                <tr>
                                    <td>{{ $item->tracking_no }}</td>
                                    <td>{{ $item->total_price }}</td>
                                    <td>{{ $item->status == '0' ? 'pending' : 'completed'}}</td>
                                    <td>
                                        <a href="{{ url('view-request/'.$item->id) }}" class="btn btn-primary">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="{{ url('services') }}" class="btn btn-warning float-right"> BACK </a>
            </div>
        </div>
    </div>
</div>
@include('footer')
