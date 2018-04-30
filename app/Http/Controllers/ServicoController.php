<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Validator;

class ServicoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicos = Servico::paginate(10);
        return view('servico.index',['servicos'=>$servicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->ValitationStore($request);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();            
        }

        $servico = new Servico();
        $servico->fill($request->all());
        $servico->save();
        return back()->with('success', 'Serviço adicionado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function show(Servico $servico)
    {
       return view('servico.show',['servico'=>$servico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function edit(Servico $servico)
    {        
        return view('servico.edit',['servico'=>$servico]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servico $servico)
    {
        $validator = $this->ValitationUpdate($request, $servico);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();            
        }
        
        $servico->fill($request->all());
        $servico->save();
        return back()->with('success', 'Serviço atualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servico $servico)
    {
        $servico->delete();
        //return redirect('servico')->with('success','Serviço excluído.');
        return response()->json(['success' => true],200);

    }
    
    /**
     * Metodo de validação da classe.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
    private function ValitationStore(Request $request) {        
        $validator = Validator::make($request->all(), [
                    'descricao' => 'required|string|unique:servico|max:120'
        ], parent::$messages);

        return $validator;
    }
    
    /**
     * Metodo de validação da classe.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
    private function ValitationUpdate(Request $request, Servico $servico) {        
        $validator = Validator::make($request->all(), [                            
                    'descricao' => ['required',
                                    'string',
                                    Rule::unique('servico')->ignore($servico->id),
                                    'max:120'],
        ], parent::$messages);

        return $validator;
    }
}
