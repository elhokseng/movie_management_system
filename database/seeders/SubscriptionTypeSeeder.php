<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subscription_type;

class SubscriptionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Subscription_type::create(['name' => 'Standard']);
        Subscription_type::create(['name' => 'Premium']);
        Subscription_type::create(['name' => 'Basic']);
    }
}
