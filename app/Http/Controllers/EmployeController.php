<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employe::all();

       /*  return view('employe.index', [
            'employes' => $employes
        ]); */
        return view('employe.index', compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'ville'=> 'required',
            'company' => 'required',
            'salaire' => 'required'
        ]);


       /*  Employe::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'ville'=> $request->ville,
            'company' => $request->company,
            'salaire' => $request->salaire
        ]); */

        $employe = new Employe();

        $employe->nom= $request->nom;
        $employe->prenom= $request->input('prenom');
        $employe->ville = $request->input('ville');
        $employe->company = $request->input('company');
        $employe->salaire= $request->input('salaire');

        $employe->save();

        return redirect('/employe')->with('success', 'Employe Ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employe = Employe::find($id);
        //$employe = Employe::findorFail($id);
        return view('employe.show',compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employe = Employe::findOrFail($id);
        return view('employe.edit', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'ville'=> 'required',
            'company' => 'required',
            'salaire' => 'required'
        ]);

        $employe = Employe::findOrFail($id);

       /*  $employe->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'ville'=> $request->ville,
            'company' => $request->company,
            'salaire' => $request->salaire
        ]); */


        $employe->nom = $request->get('nom');
        $employe->prenom = $request->get('prenom');
        $employe->ville = $request->get('ville');
        $employe->company = $request->get('company');
        $employe->salaire = $request->get('salaire');

        $employe->update();

        return redirect('/employe')->with('success', 'Employe Modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employe = Employe::findOrFail($id);
        $employe->delete();

        //Employe::destroy($employe->id);

        return redirect('/employe')->with('success', 'Employé a été supprimé avec succès');

    }
}
