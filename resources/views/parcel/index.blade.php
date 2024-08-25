@extends('layout.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="text-center">All Parcels</h4>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>#</th>
                                    <th>Sender Name</th>
                                    <th>Recipient Name</th>
                                    <th>Weight (kg)</th>
                                    <th>Value (Tsh)</th>
                                    <th>Amount Paid (Tsh)</th>
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
                                        <td>{{ $parcel->weight }}</td>
                                        <td>{{ $parcel->value }}</td>
                                        <td>{{ $parcel->amount_paid }}</td>
                                        <td>
                                            <span class="badge 
                                                {{ $parcel->status == 'Delivered' ? 'bg-success' : 'bg-warning' }}">
                                                {{ $parcel->status }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('parcel.show', $parcel->id) }}" class="btn btn-sm btn-info">View</a>
                                            <a href="{{ route('parcel.edit', $parcel->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('parcel.destroy', $parcel->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        {{ $parcels->links() }} <!-- Laravel Pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
