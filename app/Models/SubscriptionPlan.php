<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'duration'];

    /**
     * Get the subscription plans associated with the plan.
     */
    public function subscriptionPlans()
    {
        return $this->hasMany(SubscriptionPlan::class);
    }
}
