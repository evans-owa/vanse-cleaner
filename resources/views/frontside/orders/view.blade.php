<head>
    <title>My Request View</title>
</head>
@include('header1')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="">My Request View</h3>
                </div>
                <div class="back">
                    <a href="{{ url('my-order') }}" class="btn btn-warning float-right"> BACK </a>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <label for="">First name</label>
                            <div class="border p-2">{{ $userorder->fname }}</div>
                            <label for="">last name</label>
                            <div class="border p-2">{{ $userorder->lname }}</div>
                            <label for="">Email </label>
                            <div class="border p-2">{{ $userorder->email }}</div>
                            <label for="">Phone No.</label>
                            <div class="border p-2">{{ $userorder->phonenumber }}</div>
                            <label for="">Conuty</label>
                            <div class="border p-2">{{ $userorder->county }}</div>
                            <label for="">Area</label>
                            <div class="border p-2">
                                {{ $userorder->specificl }},
                                {{ $userorder->address2 }},
                                {{ $userorder->Ward }},
                                {{ $userorder->constituency }},
                            </div>
                            <label for="">Land mark </label>
                            <div class="border p-2">{{ $userorder->landmark }}</div>

                        </div>

                        <div class="col-md-6">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>service name</th>
                                        <th>Grand total</th>
                                    </tr>
                                </thead>
                                <tbody> <td>{{ $userorder->orgname }}</td>
                                    <td>KES {{ $userorder->total_price }}</td>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
