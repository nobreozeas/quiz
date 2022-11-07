<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;

class QuizController extends Controller
{

    public function create()
    {
        return view('quiz');
    }

    public function store(Request $request)
    {
        $quiz = Quiz::create([
            'questao_1' => $request->questao1,
            'questao_2' => $request->questao2,
            'questao_3' => $request->questao3,
            'questao_4' => $request->questao4,
            'questao_5' => $request->questao5
        ]);

        if($quiz){
            return view('sucesso');
        }
    }

    public function show()
    {
        $quiz = Quiz::orderBy('id', 'DESC')->first();

        return json_encode($quiz);
    }

    public function contato(Request $request)
    {
        User::create([
            'telefone' => $request->telefone
        ]);


        return response()->json([
            'msg' => "sucesso",
        ], 200);
    }



}
