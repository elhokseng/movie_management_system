<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subscription_type;
class SubscriptionPlan extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'price','subscription_types_id'];

    /**
     * Get the subscription plans associated with the plan.
     */
    public function subscriptionType()
    {
        return $this->belongsTo(Subscription_type::class, 'subscription_types_id');
    }

}
    