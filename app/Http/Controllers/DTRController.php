<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DTR;

use Carbon\Carbon;

class DTRController extends Controller
{

    public function index() {
        $records = DTR::whereNotNull('logged_out')->get();


        return view('pages.dtr', compact('records'));
    }

    public function updateLogout(Request $request)
{
    // Find the active DTR entry for the user (assuming 'name' or 'user_id' is stored)
    $dtr = DTR::where('name', "John Doe")
              ->whereNull('logged_out') // Only update if logged_out is null
              ->latest('logged_in') // Get the most recent entry
              ->first();

    if ($dtr) {
        // Update the logged_out column
        $dtr->update([
            'logged_out' => Carbon::now(),
        ]);

        return response()->json(['message' => 'Logout time updated successfully.']);
    }

    return response()->json(['message' => 'No active session found.'], 404);
}

}