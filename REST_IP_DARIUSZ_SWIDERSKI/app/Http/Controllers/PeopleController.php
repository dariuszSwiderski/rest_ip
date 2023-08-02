<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::all();

        return response()->json($people);
    }

    public function show($id)
    {
        $person = People::find($id);

        if (!$person) {
            return response()->json('Person not found', 404);
        }

        return response()->json($person);
    }

    public function update(Request $request, $id)
    {
        $person = People::find($id);

        if (!$person) {
            return response()->json('Person not found', 404);
        }

        $person->phone_number = $request->input('phone_number');
        $person->save();

        return response()->json($person);
    }

    public function destroy($id)
    {
        $person = People::find($id);

        if (!$person) {
            return response()->json('Person not found', 404);
        }

        $person->delete();

        return response()->json('Person deleted');
    }

    public function store(Request $request)
    {
        $person = new People();
        $person->first_name = $request->input('first_name');
        $person->last_name = $request->input('last_name');
        $person->phone_number = $request->input('phone_number');
    $person->street = $request->input('street');
        $person->city_country = $request->input('city_country');

        $person->save();

        return response()->json($person, 201);
    }
}