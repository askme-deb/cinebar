<div>
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Scratch Cards</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ isset($companyId) ? 'Edit' : 'Add' }} Import
                Scratch Cards (CSV)</li>
        </ol>
    </nav>
    <div class="row">
        <div class="row justify-content-center">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ isset($companyId) ? 'Edit' : 'Add' }} Import Scratch Cards (CSV)</h4>
                    @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    <form wire:submit.prevent="import">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="file" wire:model="csv_file" class="form-control" accept=".csv">
                            @error('csv_file') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ route('admin.scratch-cards.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                    @if ($successCount)
                    <div>{{ $successCount }} cards imported successfully.</div>
                    @endif
                    @if ($errorRows)
                    <div>
                        <h4>Errors:</h4>
                        <ul>
                            @foreach ($errorRows as $error)
                            <li>Row {{ $error['row'] }}: {{ implode(', ', $error['errors']) }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
