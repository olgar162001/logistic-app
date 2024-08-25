@extends('layout.main')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="text-center">Register Parcel</h4>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('parcel.store') }}">
                        @csrf
                        <!-- Sender Name -->
                        <div class="mb-3">
                            <label for="sender_name" class="form-label">Sender Name</label>
                            <input type="text" id="sender_name" class="form-control @error('sender_name') is-invalid @enderror" name="sender_name" value="{{ old('sender_name') }}" required autofocus>
                            @error('sender_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Recipient Name -->
                        <div class="mb-3">
                            <label for="recipient_name" class="form-label">Recipient Name</label>
                            <input type="text" id="recipient_name" class="form-control @error('recipient_name') is-invalid @enderror" name="recipient_name" value="{{ old('recipient_name') }}" required>
                            @error('recipient_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Recipient Address</label>
                            <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" rows="3" required>{{ old('address') }}</textarea>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Weight -->
                        <div class="mb-3">
                            <label for="weight" class="form-label">Parcel Weight (kg)</label>
                            <input type="number" id="weight" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ old('weight') }}" required step="0.01">
                            @error('weight')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Parcel Value -->
                        <div class="mb-3">
                            <label for="value" class="form-label">Parcel Value (Tsh)</label>
                            <input type="number" id="value" class="form-control @error('value') is-invalid @enderror" name="value" value="{{ old('value') }}" required step="0.01">
                            @error('value')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Amount Paid -->
                        <div class="mb-3">
                            <label for="amount_paid" class="form-label">Amount Paid (Tsh)</label>
                            <input type="number" id="amount_paid" class="form-control @error('amount_paid') is-invalid @enderror" name="amount_paid" value="{{ old('amount_paid') }}" required step="0.01">
                            @error('amount_paid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Parcel Description (Optional)</label>
                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" rows="3">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block">Register Parcel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
