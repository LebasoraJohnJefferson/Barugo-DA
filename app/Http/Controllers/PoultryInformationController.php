<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use App\Models\Poultry;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PoultryInformationController extends Controller
{
    //
    public function index(PersonalInformation $personalInformation): View {
        return view('user.managed.poultry.create', ['personalInformation' => $personalInformation]);
    }

    public  function store(Request $request, PersonalInformation $personalInformation): RedirectResponse {
        $validation_rules = [
            'Poultry_Type' => 'required|string|max:99',
            'Quantity' => 'required|numeric',
        ];

        $validated_data = $request->validate($validation_rules);

        Poultry::create([
            'Poultry_Type' => $validated_data['Poultry_Type'],
            'Quantity' => $validated_data['Quantity'],
            'RSBSA_No' => $personalInformation->RSBSA_No
        ]);

        return redirect()->route('user.managedFarmersDetails', ['currentRoute' => 'poultry', 'personalInformation' => $personalInformation, 'properties' => $personalInformation->poultry])->with('success', 'Poultry Successfully Added');
    }

    public function destroy(Poultry $poultry): RedirectResponse {
        $personalinformation = $poultry->personalinformation;
        $poultry->delete();
        return redirect()->route('admin.farmerDetails', ['currentRoute' => 'poultry', 'personalInformation' => $personalinformation, 'properties' => $personalinformation->poultry])->with('success', 'Poultry Successfully Deleted');
    }
}