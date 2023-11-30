<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll; // Import the Poll model
use App\Option; // Import the Option model
use App\Vote;

class PollController extends Controller
{
    // Create method to display the poll creation form
    public function create()
    {
        return view('polls.create');
    }

    // Create method to handle form submission and create a new poll
    public function store(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'question' => 'required',
            'options.*' => 'required',
        ]);

        // Create a new poll
        $poll = new Poll();
        $poll->user_id = auth()->user()->id; // Assuming you have user authentication
        $poll->question = $request->input('question');
        $poll->save();

        // Add options to the poll
        foreach ($request->input('options') as $optionText) {
            $option = new Option();
            $option->poll_id = $poll->id;
            $option->option_text = $optionText;
            $option->save();
        }

        return redirect()->route('poll.show', $poll->id)->with('success', 'Poll created successfully!');
    }
}
