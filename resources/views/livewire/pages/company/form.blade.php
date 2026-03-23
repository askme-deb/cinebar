<div>
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Company</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ isset($companyId) ? 'Edit' : 'Add' }} Company Profile</li>
    </ol>
</nav>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ isset($companyId) ? 'Edit' : 'Add' }} Company Profile</h4>
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" type="text" class="form-control" wire:model="name" required>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control" wire:model="email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input id="phone" type="text" class="form-control" wire:model="phone">
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input id="address" type="text" class="form-control" wire:model="address">
                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="website" class="form-label">Website</label>
                        <input id="website" type="text" class="form-control" wire:model="website">
                        @error('website') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" class="form-control" wire:model="description"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="logo_path" class="form-label">Logo Path</label>
                        <input id="logo_path" type="text" class="form-control" wire:model="logo_path">
                        @error('logo_path') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gst" class="form-label">GST</label>
                        <input id="gst" type="text" class="form-control" wire:model="gst">
                        @error('gst') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pan" class="form-label">PAN</label>
                        <input id="pan" type="text" class="form-control" wire:model="pan">
                        @error('pan') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="{{ route('company.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
