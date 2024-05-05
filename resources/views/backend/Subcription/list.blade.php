
@extends('layouts.app')
@include('layouts.navigation')
@include('layouts.leftsidebar')
@section('main')
<div class="content">
    <div class="box_wrapper">
        <div class="box-bory">
            <div class="row mt-5">
                <div class="col-lg-8">
                    <div>
                        <h3>Subscription plan</h3>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end mb-1"> 
                    <a href="{{URL::route('subscription-plans.create')}}" class="btn btn-primary mt-lg-0 mt-3">Create Plans</a>
                </div>
                <hr>
                <div class="row">
                    @foreach ($subscriptions as $subscription)
                        <div class="col-lg-4">
                            <div class="subscription-card">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h3>{{ $subscription->subscriptionType->name }}</h3>
                                    <form id="delete-subscription-{{ $subscription->id }}" action="{{ route('subscription-plans.destroy', $subscription->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-secondary btn-sm rounded-circle" style="background-color: #dc3545;">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                </div>
                                <p class="price">${{ $subscription->price }}/month</p>
                                <ul class="features">
                                    <li>{{ $subscription->description }}</li>
                                </ul>
                                <div class="text-center">
                                    <button class="btn btn-choose" onclick="toggleDetails('basic-details')">View More</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                
            </div>
        </div>
    </div>
    
</div>

<!-- Bootstrap JS (optional, for certain components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JavaScript -->
<script>
    function toggleDetails(detailsId) {
        const details = document.getElementById(detailsId);
        if (details.style.display === 'block') {
            details.style.display = 'none';
        } else {
            details.style.display = 'block';
        }
    }
</script>
@endsection

<style>
    .subscription-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    .subscription-card:hover {
        transform: translateY(-5px);
    }
    .price {
        font-size: 24px;
        font-weight: bold;
        color: #007bff;
    }
    .features {
        padding-left: 0;
        list-style: none;
        color: #6c757d;
    }
    .btn-choose {
        background-color: #007bff;
        border: none;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn-choose:hover {
        background-color: #0056b3;
    }
    .plan-details {
        display: none; /* Hide by default */
        margin-top: 20px;
    }
</style>

<style>
    body {
        background-color: #f8f9fa;
    }

    .subscription-card {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }

    .subscription-card h3 {
        color: #343a40;
    }

    .subscription-card .price {
        font-size: 24px;
        font-weight: bold;
        color: #007bff;
    }

    .subscription-card .features {
        list-style-type: none;
        padding: 0;
    }

    .subscription-card .features li {
        margin-bottom: 10px;
    }

    .subscription-card .btn-choose {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .subscription-card .btn-choose:hover {
        background-color: #0056b3;
    }
</style>