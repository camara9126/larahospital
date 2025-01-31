<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.reservation');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([
            'nom' => 'required',
            'contact' => 'required',
            'dateRv' => 'required',
            'heure' => 'required',
            'message' => 'required',
            'id_docteur' =>'required',
        ]);
        // dd($validatedData);

        reservation::create($validatedData);

        return redirect()->route('acceuil')->with('success', 'Message envoyé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        Auth::user();
        $edit= reservation::findOrFail($id);
        // dd($edit);
        return view('dashboard.reservations.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$edit)
    {
        $approuve= reservation::findOrFail($edit);
        $request->validate([
            'nom' => 'required',
            'contact' => 'required',
            'dateRv' => 'required',
            'heure' => 'required',
            'message' => 'required',
            'id_docteur' => 'required',
            'docteur' => 'required'
            ]);
            
            $approuve->update([
                'nom' => $request->nom,
                'contact' => $request->contact,
                'dateRv' => $request->dateRv,
                'heure' => $request->heure,
                'message' => $request->message,
                'id_docteur' => $request->id_docteur,
                'statut' => $request->statut,
                'docteur' => Auth::user()->titre
            ]);
            dd($approuve);

            return redirect()->back()->with('success', 'Reservation approuvée !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Reservation en attente.
     */
    public function reservationEnAttente()
    {
        $attente= reservation::where('statut', 'attente')->get();
        return view('dashboard.reservations.attente',compact('attente'));
    }
    /**
     * Reservation approuve.
     */
    public function reservationApprouve()
    {
        $approuve= reservation::where('statut', 'approuve')->get();
        return view('dashboard.reservations.approuve',compact('approuve'));
    }

}
