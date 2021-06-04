<?php

namespace App\Http\Controllers\Entrevistador;

use App\Http\Controllers\Controller;
use App\Models\Amount;
use App\Models\Area;
use App\Models\Category;
use App\Models\Collaborator;
use App\Models\DatoGeneral;
use App\Models\Departament;
use App\Models\District;
use App\Models\Position;
use App\Models\Province;
use App\Models\Ubigee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CollaboratorController extends Controller
{

    public $collaborator;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entrevistador.collaborators.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departaments = Departament::pluck('name', 'id');
        $provinces = Province::pluck('name', 'id');
        $districts = District::pluck('name', 'id');
        $ubigees = Ubigee::pluck('distrito', 'id');

        return view('entrevistador.collaborators.create', compact('departaments', 'provinces', 'districts', 'ubigees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'documento' => 'required',
            'ndocumento' => 'required|unique:collaborators',
            'fechanac' => 'required',
            'instruccion' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'correo' => 'required',
            'sexo' => 'required',
            'estadocivil' => 'required',
            'sanguineo' => 'required',
            'hijos' => 'required',
            'contacto' => 'required',
            'telemeergencia' => 'required',
            'tiempocasa' => 'required',
            'banco' => 'required',
            'cuentabancaria' => 'required',
            'departament_id' => 'required',
            'province_id' => 'required',
            'district_id' => 'required',
            'ubigee_id' => 'required',
            'file' => 'image'
        ]);

        $collaborator = Collaborator::create($request->all());


        if ($request->file('file')){
            $url = Storage::put('collaborators', $request->file('file'));

            $collaborator->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('entrevistador.collaborators.edit', compact('collaborator'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Collaborator $collaborator)
    {
        return view('entrevistador.collaborators.show', compact('collaborator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Collaborator $collaborator)
    {
        $departaments = Departament::pluck('name', 'id');
        $provinces = Province::pluck('name', 'id');
        $districts = District::pluck('name', 'id');
        $ubigees = Ubigee::pluck('distrito', 'id');

        return view('entrevistador.collaborators.edit', compact('collaborator', 'departaments', 'provinces', 'districts', 'ubigees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collaborator $collaborator)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'documento' => 'required',
            'ndocumento' => 'required|unique:collaborators,ndocumento,' .$collaborator->id,
            'fechanac' => 'required',
            'instruccion' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'correo' => 'required',
            'sexo' => 'required',
            'estadocivil' => 'required',
            'sanguineo' => 'required',
            'hijos' => 'required',
            'contacto' => 'required',
            'telemeergencia' => 'required',
            'tiempocasa' => 'required',
            'banco' => 'required',
            'cuentabancaria' => 'required',
            'departament_id' => 'required',
            'province_id' => 'required',
            'district_id' => 'required',
            'ubigee_id' => 'required',
            'file' => 'image'
        ]);

        $collaborator->update($request->all());

        if ($request->file('file')){
            $url = Storage::put('collaborators', $request->file('file'));

            if ($collaborator->image){
                Storage::delete($collaborator->image->url);

                $collaborator->image->update([
                    'url' => $url
                ]);
            }else{
                $collaborator->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('entrevistador.collaborators.edit', $collaborator);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collaborator $collaborator)
    {
        //
    }
}
