<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formacions;

class FormacionsController extends Controller
{
    public function get(Request $request, $id){
      return Formacions::findOrFail($id);
    }
    
    public function list(Request $request){
      return Formacions::get();
    }
    
    public function create(Request $request){
        
      $validatedData = $request->validate([
        'nombre' => 'required |max:200 ',
        'descripcion' => 'required |max:500 ',
        'fecha_inicio' => 'required ',
        'fecha_fin' => 'required ',
        'ubicacion' => 'required |max:200 ',
        'departamento' => 'required |max:200 ',
        'municipio' => 'required |max:200 ',
        'horas_curso' => 'required |max:11 ',
        'modalidad' => 'required |max:200 ',
        'tipo_costo' => 'required |max:200 ',
        'costo' => 'required ',
        'n_participantes' => 'required |max:11 ',
        'cant_evaluaciones' => 'required |max:11 ',
        'contrato' => 'required |max:11 ',
        'orden_compra' => 'required |max:11 ',
        'compra_bolsa' => 'required |max:11 ',
        'item' => 'required |max:11 ',
        'programa' => 'required |max:200 ',
        'facilitador' => 'required |max:200 ',
      ],[
        'nombre.required' => 'nombre is a required field.',
        'nombre.max' => 'nombre can only be 200 characters.',
        'descripcion.required' => 'descripcion is a required field.',
        'descripcion.max' => 'descripcion can only be 500 characters.',
        'fecha_inicio.required' => 'fecha_inicio is a required field.',
        'fecha_fin.required' => 'fecha_fin is a required field.',
        'ubicacion.required' => 'ubicacion is a required field.',
        'ubicacion.max' => 'ubicacion can only be 200 characters.',
        'departamento.required' => 'departamento is a required field.',
        'departamento.max' => 'departamento can only be 200 characters.',
        'municipio.required' => 'municipio is a required field.',
        'municipio.max' => 'municipio can only be 200 characters.',
        'horas_curso.required' => 'horas_curso is a required field.',
        'horas_curso.max' => 'horas_curso can only be 11 characters.',
        'modalidad.required' => 'modalidad is a required field.',
        'modalidad.max' => 'modalidad can only be 200 characters.',
        'tipo_costo.required' => 'tipo_costo is a required field.',
        'tipo_costo.max' => 'tipo_costo can only be 200 characters.',
        'costo.required' => 'costo is a required field.',
        'n_participantes.required' => 'n_participantes is a required field.',
        'n_participantes.max' => 'n_participantes can only be 11 characters.',
        'cant_evaluaciones.required' => 'cant_evaluaciones is a required field.',
        'cant_evaluaciones.max' => 'cant_evaluaciones can only be 11 characters.',
        'contrato.required' => 'contrato is a required field.',
        'contrato.max' => 'contrato can only be 11 characters.',
        'orden_compra.required' => 'orden_compra is a required field.',
        'orden_compra.max' => 'orden_compra can only be 11 characters.',
        'compra_bolsa.required' => 'compra_bolsa is a required field.',
        'compra_bolsa.max' => 'compra_bolsa can only be 11 characters.',
        'item.required' => 'item is a required field.',
        'item.max' => 'item can only be 11 characters.',
        'programa.required' => 'programa is a required field.',
        'programa.max' => 'programa can only be 200 characters.',
        'facilitador.required' => 'facilitador is a required field.',
        'facilitador.max' => 'facilitador can only be 200 characters.',
      ]);

        $formacions = Formacions::create($request->all());    
        return $formacions;
    }
    
    public function update(Request $request, $id){
      
      $validatedData = $request->validate([
        'nombre' => 'required |max:200 ',
        'descripcion' => 'required |max:500 ',
        'fecha_inicio' => 'required ',
        'fecha_fin' => 'required ',
        'ubicacion' => 'required |max:200 ',
        'departamento' => 'required |max:200 ',
        'municipio' => 'required |max:200 ',
        'horas_curso' => 'required |max:11 ',
        'modalidad' => 'required |max:200 ',
        'tipo_costo' => 'required |max:200 ',
        'costo' => 'required ',
        'n_participantes' => 'required |max:11 ',
        'cant_evaluaciones' => 'required |max:11 ',
        'contrato' => 'required |max:11 ',
        'orden_compra' => 'required |max:11 ',
        'compra_bolsa' => 'required |max:11 ',
        'item' => 'required |max:11 ',
        'programa' => 'required |max:200 ',
        'facilitador' => 'required |max:200 ',
      ],[
        'nombre.required' => 'nombre is a required field.',
        'nombre.max' => 'nombre can only be 200 characters.',
        'descripcion.required' => 'descripcion is a required field.',
        'descripcion.max' => 'descripcion can only be 500 characters.',
        'fecha_inicio.required' => 'fecha_inicio is a required field.',
        'fecha_fin.required' => 'fecha_fin is a required field.',
        'ubicacion.required' => 'ubicacion is a required field.',
        'ubicacion.max' => 'ubicacion can only be 200 characters.',
        'departamento.required' => 'departamento is a required field.',
        'departamento.max' => 'departamento can only be 200 characters.',
        'municipio.required' => 'municipio is a required field.',
        'municipio.max' => 'municipio can only be 200 characters.',
        'horas_curso.required' => 'horas_curso is a required field.',
        'horas_curso.max' => 'horas_curso can only be 11 characters.',
        'modalidad.required' => 'modalidad is a required field.',
        'modalidad.max' => 'modalidad can only be 200 characters.',
        'tipo_costo.required' => 'tipo_costo is a required field.',
        'tipo_costo.max' => 'tipo_costo can only be 200 characters.',
        'costo.required' => 'costo is a required field.',
        'n_participantes.required' => 'n_participantes is a required field.',
        'n_participantes.max' => 'n_participantes can only be 11 characters.',
        'cant_evaluaciones.required' => 'cant_evaluaciones is a required field.',
        'cant_evaluaciones.max' => 'cant_evaluaciones can only be 11 characters.',
        'contrato.required' => 'contrato is a required field.',
        'contrato.max' => 'contrato can only be 11 characters.',
        'orden_compra.required' => 'orden_compra is a required field.',
        'orden_compra.max' => 'orden_compra can only be 11 characters.',
        'compra_bolsa.required' => 'compra_bolsa is a required field.',
        'compra_bolsa.max' => 'compra_bolsa can only be 11 characters.',
        'item.required' => 'item is a required field.',
        'item.max' => 'item can only be 11 characters.',
        'programa.required' => 'programa is a required field.',
        'programa.max' => 'programa can only be 200 characters.',
        'facilitador.required' => 'facilitador is a required field.',
        'facilitador.max' => 'facilitador can only be 200 characters.',
      ]);

        $formacions = Formacions::findOrFail($id);
        $input = $request->all();
        $formacions->fill($input)->save();
        return $formacions;
    }
    
    public function delete(Request $request, $id){
        $formacions = Formacions::findOrFail($id);
        $formacions->delete();
    }
}
 ?>