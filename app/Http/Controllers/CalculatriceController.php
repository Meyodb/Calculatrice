<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatriceController extends Controller
{
    // La méthode index pour afficher le formulaire de la calculatrice
    public function index()
    {
        // Retourne la vue du formulaire de calculatrice
        return view('calculatrice');
    }

    // La méthode calculate pour effectuer les calculs
    public function calculate(Request $request)
    {
        // Effectuer le calcul et retourner le résultat
        $nombre1 = $request->input('nombre1');
        $nombre2 = $request->input('nombre2');
        $operation = $request->input('operation');

        switch ($operation) {
            case 'addition':
                $resultat = $nombre1 + $nombre2;
                break;
            case 'soustraction':
                $resultat = $nombre1 - $nombre2;
                break;
            case 'multiplication':
                $resultat = $nombre1 * $nombre2;
                break;
            case 'division':
                $resultat = $nombre2 != 0 ? $nombre1 / $nombre2 : 'Division par zéro interdite';
                break;
            default:
                $resultat = 'Opération inconnue';
        }

        // Retourne la vue avec le résultat du calcul
        return view('calculatrice', ['resultat' => $resultat]);
    }
}

