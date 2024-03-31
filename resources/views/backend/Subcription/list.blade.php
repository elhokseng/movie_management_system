
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
<div class="row mt-2">
    <h3>Subscriptions <span class="fs-5">List</span></h3>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="subscription-card">
                <h3>Basic</h3>
                <p class="price">$9.99/month</p>
                <ul class="features">
                    <li>Access to a limited library of movies</li>
                    <li>Standard video quality</li>
                    <li>No HD streaming</li>
                </ul>
                <button class="btn btn-choose">Choose Plan</button>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="subscription-card">
                <h3>Standard</h3>
                <p class="price">$14.99/month</p>
                <ul class="features">
                    <li>Access to a wider library of movies</li>
                    <li>HD video quality</li>
                    <li>No Ultra HD streaming</li>
                </ul>
                <button class="btn btn-choose">Choose Plan</button>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="subscription-card">
                <h3>Premium</h3>
                <p class="price">$19.99/month</p>
                <ul class="features">
                    <li>Access to the full library of movies</li>
                    <li>Ultra HD video quality</li>
                    <li>Watch on multiple devices simultaneously</li>
                </ul>
                <button class="btn btn-choose">Choose Plan</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>


  