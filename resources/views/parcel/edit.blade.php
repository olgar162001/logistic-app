@extends('layout.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="text-center">Edit Parcel</h4>
                </div>
 
                <div class="card-body">
                    <form method="POST" action="{{ route('parcel.update', $parcel->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="sender_name">Sender Name</label>
                            <input type="text" name="sender_name" class="form-control" value="{{ $parcel->sender_name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="recipient_name" class="form-label">Recipient Name</label>
                            <input type="text" id="recipient_name" class="form-control " name="recipient_name" value="{{ $parcel->recipient_name }}" required>
                           
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Recipient Address</label>
                            <textarea id="address" class="form-control" name="address" rows="3" required>{{$parcel->address }}</textarea>
                           
                        </div>

                        <!-- Weight -->
                        <div class="mb-3">
                            <label for="weight" class="form-label">Parcel Weight (kg)</label>
                            <input type="number" id="weight" class="form-control " name="weight" value="{{ $parcel->weight }}" required step="0.01">
                            
                        </div>

                        <!-- Parcel Value -->
                        <div class="mb-3">
                            <label for="value" class="form-label">Parcel Value (Tsh)</label>
                            <input type="number" id="value" class="form-control " name="value" value="{{ $parcel->value }}" required step="0.01">
                           
                        </div>

                        <!-- Amount Paid -->
                        <div class="mb-3">
                            <label for="amount_paid" class="form-label">Amount Paid (Tsh)</label>
                            <input type="number" id="amount_paid" class="form-control" name="amount_paid" value="{{ $parcel->amount_paid }}" required step="0.01">
                            
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Parcel Description (Optional)</label>
                            <textarea id="description" class="form-control " name="description" rows="3">{{ $parcel->description }}</textarea>
                            
                        </div>                       
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Update Parcel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
