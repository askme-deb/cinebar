<div>
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Scratch Card Redemptions</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ isset($companyId) ? 'Edit' : 'Add' }} Redemption
            </li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Card Number</th>
                                <th>Company</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Redeemed At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($redemptions as $r)
                            <tr>
                                <td>{{ $r->scratchCard->card_number ?? '-' }}</td>
                                <td>{{ $r->scratchCard->company->name ?? '-' }}</td>
                                <td>{{ $r->name }}</td>
                                <td>{{ $r->email }}</td>
                                <td>{{ $r->mobile }}</td>
                                <td>{{ $r->redeemed_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $redemptions->links(data: ['scrollTo' => false]) }}
                </div>
            </div>
        </div>
    </div>
</div>
