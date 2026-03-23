<div>
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.scratch-cards.index') }}">Scratch Cards</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ isset($companyId) ? 'Edit' : 'Add' }} Scratch Card</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ isset($companyId) ? 'Edit' : 'Add' }} Scratch Card</h4>
                    @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    <form wire:submit.prevent="save">
                        <div class="mb-3">
                            <label for="name" class="form-label">Company</label>
                            <select wire:model="company_id" class="form-control" required>
                                <option value="">Select</option>
                                @foreach ($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                            @error('company_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="card_number" class="form-label">Card Number</label>
                            <input id="card_number" type="text" class="form-control" wire:model="card_number" required>
                            @error('card_number')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="coupon_value" class="form-label">Coupon Value</label>
                            <input id="coupon_value" type="number" class="form-control" wire:model="coupon_value"
                                required>
                            @error('coupon_value')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
