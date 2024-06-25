<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RefugeRequest;

class RefugeRequestController extends Controller
{
    public function index()
    {
        // Récupérer toutes les demandes de refuges depuis la base de données
        $refugeRequests = RefugeRequest::all();

        // Retourner la vue en passant les données récupérées
        return view('ajout-refuges', compact('refugeRequests'));
    }

    public function create()
    {
        return view('ajout-refuges');
    }

    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom_refuge' => 'required|string',
            'adresse_refuge' => 'required|string',
            'numero_refuge' => 'required|string',
            'site_web_refuge' => 'nullable|url',
        ]);

        // Enregistrement de la demande de refuge
        RefugeRequest::create([
            'nom_refuge' => $validatedData['nom_refuge'],
            'adresse_refuge' => $validatedData['adresse_refuge'],
            'numero_refuge' => $validatedData['numero_refuge'],
            'site_web_refuge' => $validatedData['site_web_refuge'],
        ]);

        // Redirection après enregistrement
        return redirect()->back()->with('success', 'Votre demande a bien été envoyée!');
    }

    public function showFormulaire()
    {
        return view('formulaire-refuges');
    }

    public function showAjout()
    {
        // Récupérer toutes les demandes de refuges depuis la base de données
        $refugeRequests = RefugeRequest::all();

        // Retourner la vue en passant les données récupérées
        return view('ajout-refuges', compact('refugeRequests'));
    }
}
