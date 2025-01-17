<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public $val;
//necesita doble guion bajo
    public function __construct(){
        $this->val = [
            'nombre'=>['required','min:3'],
            'apellidoP'=> 'required',
            'email'=>'required'

        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::paginate(15);
        //
        //return view("Alumnos/index",['alumnos'=>$alumnos]);
        //ahora existe la variable alumno en la pagina index
        $des="";
        return view("Alumnos2/index",compact("alumnos","des"));
       

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alumnos = Alumno::paginate(15);
        $alumno = new Alumno();
        $accion="C";
        $txtbtn="guardar";
        $des="";
        return view("Alumnos2/form",compact("alumnos","alumno","accion","txtbtn","des"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //aun no grabamos
       $val = $request->validate($this->val);
       Alumno::create($val);                        //"variable","valor"
        return redirect()->route("alumnos.index")->with("mensaje","se insertó correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        
        $alumnos = Alumno::paginate(5);
        $accion="D";
        $txtbtn="confirmar la eliminacion";
        $des="disabled";
        return view("Alumnos2/form",compact("alumnos","alumno","accion","txtbtn","des"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        
        $alumnos = Alumno::paginate(5);
        $accion="E";
        $txtbtn="actualizar";
        $des="";
        return view("Alumnos2/form",compact("alumnos","alumno","accion","txtbtn","des"));

       // return view("Alumnos.editar");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $val = $request->validate($this->val);

        $alumno->update($val);
       

        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');
       // return view("Alumnos.eliminar");
    }
}
