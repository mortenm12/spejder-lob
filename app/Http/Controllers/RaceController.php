<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Race;

class RaceController extends Controller
{
    public function newRace()
    {
        return view('newRace');
    }

    public function createRace(Request $request)
    {
        $name = $request->input('name');
        $startTime = date('Y/m/d H:i:s', strtotime($request->input('startTime')));
        $endTime = date('Y/m/d H:i:s', strtotime($request->input('endTime')));

        if($name == null || $name == ''){
            return view('newRace', [
                'missing' => true
            ]);
        }

        if($startTime == null || $startTime == ''){
            return view('newRace', [
                'missing' => true
            ]);
        }

        if($endTime == null || $endTime == ''){
            return view('newRace', [
                'missing' => true
            ]);
        }

        if($endTime <= $startTime){
            return view('newRace', [
                'endTimeAfterStartTime' => true
            ]);
        }

        $race = new Race();
        $race->name = $name;
        $race->startTime = $startTime;
        $race->endTime = $endTime;
        $race->user_id = Auth::user()->id;
        $race->save();

        return redirect('/home');

    }

    public function getRace($id)
    {
        $race = Race::findOrFail($id);
        return view('race', [
            'race' => $race
        ]);
    }
}
