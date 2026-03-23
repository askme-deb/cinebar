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

                 <a href="{{ route('company.create') }}" class="btn btn-primary mb-3">Add Company</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>GST</th>
                <th>PAN</th>
                <th>User</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->phone }}</td>
                    <td>{{ $company->gst }}</td>
                    <td>{{ $company->pan }}</td>
                    <td>{{ $company->user->name ?? '-' }}</td>
                    <td>
                        <a href="{{ route('company.edit', $company->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>
</div>
</div>
