<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
use App\Models\Subscription_type;


class Subscription_typeController extends Controller
{
    public function index()
    {
        $subscriptionTypes = Subscription_type::all();
        return view('subscription_types.index', compact('subscriptionTypes'));
    }

    public function create()
    {
        return view('subscription_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:subscription_types,name',
        ]);

        Subscription_type::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('subscription-types.index')
            ->with('success', 'Subscription type created successfully.');
    }

    public function edit(Subscription_type $subscriptionType)
    {
        return view('subscription_types.edit', compact('subscriptionType'));
    }

    public function update(Request $request, Subscription_type $subscriptionType)
    {
        $request->validate([
            'name' => 'required|unique:subscription_types,name,'.$subscriptionType->id,
        ]);

        $subscriptionType->update([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('subscription-types.index')
            ->with('success', 'Subscription type updated successfully.');
    }

    public function destroy(Subscription_type $subscriptionType)
    {
        $subscriptionType->delete();

        return redirect()->route('subscription-types.index')
            ->with('success', 'Subscription type deleted successfully.');
    }
}
