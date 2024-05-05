@extends('layouts.app')
@include('layouts.navigation')
@include('layouts.leftsidebar')

@section('main')
<div class="content">
    <div class="box_wrapper">
        <div class="box_body">
            @if(isset($plan))
                <h2 class="text-center">Edit Subscription Plan</h2>
                <form action="{{ route('subscription-plans.update', $plan->id) }}" method="POST">
                    @method('PUT')
            @else
                <h2 class="text-center">Create Subscription Plan</h2>
                <form action="{{ route('subscription-plans.store') }}" method="POST">
            @endif
                @csrf
                <div class="mb-3">
                    <label for="subscription_types_id">Subscription Type:</label>
                    <select class="form-select" name="subscription_types_id" required>
                        <option selected disabled>Choose Subscription Type</option> 
                        @foreach ($subscriptions as $subscription)
                            <option value="{{ $subscription->id }}" {{ old('subscription_types_id', isset($plan) && $plan->subscription_type_id == $subscription->id ? 'selected' : '') }}>{{ $subscription->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', isset($plan) ? $plan->price : '') }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control" required>{{ old('description', isset($plan) ? $plan->description : '') }}</textarea>
                </div>
              

                <div id="description-container" class="mt-4">
                    <!-- Existing description inputs (if editing) will be populated here -->
                    @if(isset($descriptions) && is_array($descriptions))
                        @foreach($descriptions as $description)
                            <div class="form-group mt-5">
                                <input type="text" name="descriptions[]" class="form-control" value="{{ $description }}" required>
                            </div>
                        @endforeach
                    @endif
                </div>
            
                <div class="text-end">
                    <button type="button" id="add-description" class="btn btn-primary mt-4 float-start">Add Description</button>
                    <a href="{{ route('subscription-plans.index') }}" class="btn btn-secondary mt-4 me-1">Cancel</a>
                    <button type="submit" class="btn btn-primary mt-4">{{ isset($plan) ? 'Update' : 'Create' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('description-container');
        const addButton = document.getElementById('add-description');

        addButton.addEventListener('click', function() {
            const newInput = document.createElement('div');
            newInput.classList.add('form-group');
            newInput.innerHTML = `
                <input type="text" name="descriptions[]" class="form-control" required>
            `;
            container.appendChild(newInput);
        });
    });
</script>