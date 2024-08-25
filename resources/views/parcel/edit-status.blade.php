@extends('layout.main')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Update Parcel Status</h2>

    <!-- Check for any session messages -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('parcel.update-status', $parcel->id) }}">
        @csrf

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="pending" {{ $parcel->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="shipped" {{ $parcel->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                <option value="delivered" {{ $parcel->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                <option value="canceled" {{ $parcel->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
            </select>
            @error('status')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Status</button>
    </form>
</div>
@endsection
