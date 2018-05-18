<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manten;
use Carbon\Carbon;
class MantenController extends Controller
{
   
public function index()
{
	$mantenimientos = Manten::all();
return view ('mantenpc.index', compact('mantenimientos'));
}

public function create()
{
	$proactivos = Manten::all();
return view ('mantenpc.create', compact('proactivos'));
}

public function store(Request $request)

{

$this->validate($request,[
't_equipo'=> 'required'
],[
't_equipo.required'=>'* Por favor ingresa el tipo de equipo.'	
]);

	$proactivos = new Manten();
	$proactivos->t_equipo = $request->t_equipo;
	$proactivos->marca = $request->marca;
	$proactivos->modelo = $request->modelo;
	$proactivos->n_serie = $request->n_serie;
	$proactivos->fecha_manten =Carbon::parse ($request->fecha_manten);


	$proactivos->save();
	return redirect('Mantenimiento')->with('flash','Mantenimiento registrado correctamente');
}
public function edit(Manten $manten){

return view('Mantenpc.edit',compact('manten'));


}

public function update(Manten $manten,Request $request)

{
	$manten->t_equipo = $request->t_equipo;
	$manten->marca = $request->marca;
	$manten->modelo = $request->modelo;
	$manten->n_serie = $request->n_serie;
	$manten->fecha_manten =Carbon::parse ($request->fecha_manten);
    $manten->save();
return redirect('Mantenimiento')->with('flash','Mantenimiento registrado correctamente');
}

public function destroy (Manten $manten,Request $request)

{
	$manten->t_equipo = $request->t_equipo;
	$manten->marca = $request->marca;
	$manten->modelo = $request->modelo;
	$manten->n_serie = $request->n_serie;
	$manten->fecha_manten =Carbon::parse ($request->fecha_manten);
    $manten->delete();
return redirect('Mantenimiento')->with('flash','Mantenimiento registrado correctamente');






}



}
