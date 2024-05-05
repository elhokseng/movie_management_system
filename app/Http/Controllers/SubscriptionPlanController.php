<?php

namespace App\Http\Controllers;

use App\Models\Subscription_type;
use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;

class SubscriptionPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscriptions = SubscriptionPlan::all();
        // dd($subscriptions);
        return view('backend.Subcription.list',compact('subscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subscriptions = Subscription_type::all();
        return view('backend.Subcription.create',compact('subscriptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descriptions' => 'required|array',
            'descriptions.*' => 'string',
            'price' => 'required|numeric',
            'subscription_types_id' => 'required|exists:subscription_types,id',
        ]);

        $subscriptionPlanData = [
            'price' => $request->input('price'),
            'subscription_types_id' => $request->input('subscription_types_id'),
        ];

        // Create a new SubscriptionPlan instance
        $subscriptionPlan = SubscriptionPlan::create($subscriptionPlanData);

        // Attach descriptions to the subscription plan
        foreach ($request->input('descriptions') as $description) {
            // Save each description associated with the subscription plan
            $subscriptionPlan->descriptions()->create(['content' => $description]);
        }

        return redirect()->route('subscription-plans.index')
            ->with('success', 'Subscription plan created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $subscriptions = SubscriptionPlan::all();
        return view('backend.Subcription.view',compact('subscriptions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $plan = SubscriptionPlan::findOrFail($id);
        return view('subscription_plans.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);

        $plan = SubscriptionPlan::findOrFail($id);
        $plan->update($request->all());

        return redirect()->route('subscription-plans.index')
            ->with('success', 'Subscription plan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $plan = SubscriptionPlan::findOrFail($id);
        $plan->delete();
    
        return redirect()->route('subscription-plans.index')
            ->with('success', 'Subscription plan deleted successfully.');
    }
    
}
