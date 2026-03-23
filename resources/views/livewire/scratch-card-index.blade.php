<div>
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Scratch Card</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ isset($companyId) ? 'Edit' : 'Add' }} Scratch Card
            </li>
        </ol>
    </nav>
    <div class="row mb-3">
        <div class="col-md-3 mb-2">
            <input type="text" class="form-control" placeholder="Search by Card Number" wire:model.live="search">
        </div>
        <div class="col-md-3 mb-2">
            <select class="form-control" wire:model.live="company">
                <option value="">All Companies</option>
                @foreach ($companies as $companyOption)
                    <option value="{{ $companyOption->id }}">{{ $companyOption->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3 mb-2">
            <select class="form-control" wire:model.live="status">
                <option value="">All Statuses</option>
                <option value="unused">Unused</option>
                <option value="used">Used</option>
                <option value="expired">Expired</option>
            </select>
        </div>
        <div class="col-md-3 mb-2 text-end">
            <a href="{{ route('admin.scratch-cards.create') }}" class="btn btn-primary">Add New</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Card Number</th>
                                <th>Company</th>
                                <th>Value</th>
                                <th>Status</th>
                                <th>Used At</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($scratchCards as $card)
                            <tr>
                                <td>{{ $card->card_number }}</td>
                                <td>{{ $card->company->name ?? '-' }}</td>
                                <td>{{ $card->coupon_value }}</td>
                                <td>{{ $card->status }}</td>
                                <td>{{ $card->used_at }}</td>
                                <td>{{ $card->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div wire:ignore>
                        {{ $scratchCards->links(data: ['scrollTo' => false]) }}
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
