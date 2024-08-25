@extends('layout.main')

@section('content')
<div class="container mt-5">
    <div class="card-header bg-primary text-white">
        <h4 class="text-center">Parcels List</h4>
    </div>

    <!-- Display Success Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Parcel Table -->
    <table class="table table-bordered table-striped table-hover">
    <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>Sender</th>
                <th>Recipient</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($parcels as $parcel)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $parcel->sender_name }}</td>
                <td>{{ $parcel->recipient_name }}</td>
                <td>{{ ucfirst($parcel->status) }}</td>
                <td>
                    <!-- Button to Update Parcel Status -->
                    <a href="{{ route('parcel.edit-status', $parcel->id) }}" class="btn btn-primary">
                        Update Status
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links (if applicable) -->
    {{ $parcels->links() }}
</div>
@endsection
