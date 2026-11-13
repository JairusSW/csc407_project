<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Donation;
use App\Models\Event;
use Illuminate\Http\Request;

class Controller
{
    public function people()
    {
        // this all was mostly me. my intellisense is on the fritz so when I type like Contact::or "orderBy" doesn't show up and stuff.
        // i had to ask chatgpt about the methods and stuff. used it to search docs.
        return view('people.index', [
            'people' => Contact::orderBy('last_name')->orderBy('first_name')->get(),
        ]);
    }

    public function events()
    {
        return view('events', [
            'events' => Event::orderByDesc('event_start_date')->get(),
        ]);
    }

    public function donations()
    {
        return view('donations', [
            'donations' => Donation::orderByDesc('donation_date')->get(),
        ]);
    }

    public function showPerson(Contact $person)
    {
        return view('people.show', [
            'person' => $person,
            'events' => $person->events()->orderByDesc('event_start_date')->get(),
            'donations' => $person->donations()->orderByDesc('donation_date')->get(),
        ]);
    }

    public function showRegistrationForm(Contact $person)
    {
        return view('people.registration', [
            'person' => $person,
            'events' => Event::orderByDesc('event_start_date')->get(),
        ]);
    }

    public function registerForEvent(Request $request, Contact $person)
    {
        $validated = $request->validate(['event_id' => 'required|integer|exists:events,event_id']);
        $person->events()->syncWithoutDetaching([$validated['event_id']]);

        return to_route('people')->with('status', 'Event registration saved.');
    }

    public function showDonationForm(Contact $person)
    {
        return view('people.donation', ['person' => $person]);
    }

    public function saveDonation(Request $request, Contact $person)
    {
        $validated = $request->validate([
            'donation_amount' => 'required|numeric',
            'donation_date' => 'required|date_format:Y-m-d',
        ]);

        if ($person->donor_id === null) {
            $person->donor_id = Contact::max('donor_id') + 1;
            $person->save();
        }

        $person->donations()->create($validated);

        return to_route('people')->with('status', 'Donation saved.');
    }
}
