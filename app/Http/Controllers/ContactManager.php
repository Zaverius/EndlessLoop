<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Contacto;
use App\Tag;
use App\EstadoContacto;

class ContactManager extends Controller
{
    public function index() {
        $contactos = Contacto::all();

    	return view('admin.contactos.index')->with('contactos', $contactos);
    }

    public function create() {

        if(Auth::user()->admin) {
            $estados = EstadoContacto::all();

            return view('admin.contactos.crear')->with('estados', $estados);
        } else {
            $contactos = Contacto::all();

            return redirect('admin/contactos')->with('contactos', $contactos)->withErrors('No tienes permisos suficientes para acceder a esta página.');
        }
    }

    public function store(Request $request) {
        //Validamos los inputs
        $request->validate([
            'persona'=>'required|string|min:2',
            'mail'=>'required|email',
            'empresa'=>'required|string',
            'pais'=>'required|string',
            'estado'=>'required|int',
            'telefono'=>'nullable',
            'web'=>'nullable|url',
            'historico' => 'nullable'
        ]);

        //Creamos un nuevo contacto, el cuál lo guardaremos pronto en la base de datos
        $contacto = new Contacto([
            'persona' => $request->get('persona'),
            'email' => $request->get('mail'),
            'empresa' => $request->get('empresa'),
            'pais'=> $request->get('pais'),
            'telefono'=>$request->get('telefono'),
            'web'=>$request->get('web'),
            'otros_medios' => $request->get('otros_medios'),
            'historico' => $request->get('historico')
        ]);

        $estado = EstadoContacto::findOrFail($request->get('estado'));

        $contacto->estado = $request->get('estado');
        $contacto->historico = $request->get('historico');

        $contacto->save();

        //Cogemos las ramas y las dividimos en un array a partir del character ','. Nos comemos también los espacios

        if ($request->ramas != null) {
            $ramas = explode(",", str_replace(' ', '', $request->ramas));
            foreach ($ramas as $rama) {
                $rama = strtoupper($rama);
                if (!empty($rama)) {
                    //Si encontramos la tag en la base de datos..
                    if (DB::table('tags')->where('nombre_tag', $rama)->exists()) {
                        $dbRama = DB::table('tags')->where('nombre_tag', $rama)->first();
                        $contacto->tags()->attach($dbRama->id);
                    //Si no encontramos la tag..
                    } else {

                        $tag = new Tag();
                        $tag->nombre_tag = $rama;

                        $tag->timestamps = false;

                        $tag->save();

                        $contacto->tags()->attach($tag->id);
                    }
                }

            }
        }


        return redirect('admin/contactos')->with('success',  'Se ha guardado el contacto con éxito.');
    }

    public function edit($id) {

        if(Auth::user()->admin) {
            $contacto = Contacto::find($id);
            $estados = EstadoContacto::all();

            return view('admin.contactos.edit')->with('contacto', $contacto)->with('estados', $estados);
        } else {
            $contactos = Contacto::all();

            return redirect('admin/contactos')->with('contactos', $contactos)->withErrors('No tienes permisos suficientes para acceder a esta página.');
        }


    }

    public function update(Request $request, $id) {

        $contacto = Contacto::find($id);

        $request->validate([
            'persona'=>'required|string|min:2',
            'mail'=>'required|email',
            'empresa'=>'required|string',
            'pais'=>'required|string',
            'telefono'=>'nullable',
            'web'=>'nullable|url',
            'otro_medio'=>'nullable',
            'historico' => 'nullable',
            'estado'=> 'required|int'
        ]);

        $contacto->persona = $request->get('persona');
        $contacto->email = $request->get('mail');
        $contacto->empresa = $request->get('empresa');
        $contacto->pais = $request->get('pais');
        $contacto->telefono = $request->get('telefono');
        $contacto->web = $request->get('web');
        $contacto->otros_medios = $request->get('otro_medio');

         $estado = EstadoContacto::findOrFail($request->get('estado'));

        $contacto->estado = $request->get('estado');
        $contacto->historico = $request->get('historico');


        $contacto->save();

         //Cogemos las ramas y las dividimos en un array a partir del character ','. Nos comemos también los espacios
        $ramas = explode(",", str_replace(' ', '', $request->ramas));

        //dd($contacto->tags()->get());

        if ($ramas != null) {
            foreach ($ramas as $rama) {
                $rama = strtoupper($rama);

                //Si encontramos la tag en la base de datos..
                if (DB::table('tags')->where('nombre_tag', $rama)->exists()) {
                    $dbRama = DB::table('tags')->where('nombre_tag', $rama)->first();
                    if (!$contacto->tags()->get()->contains($dbRama->id)) {
                        $contacto->tags()->attach($dbRama->id);
                    }
                    
                //Si no encontramos la tag..
                } else {

                    $tag = new Tag();
                    $tag->nombre_tag = $rama;

                    $tag->timestamps = false;

                    $tag->save();

                    $contacto->tags()->attach($tag->id);
                }
            }
        }

        foreach($contacto->tags()->get() as $tag) {
            if(!in_array($tag->nombre_tag, $ramas)) {
                $contacto->tags()->detach($tag->id);

                if (!DB::table('contacto_tag')->where('tag_id', $tag->id)->exists()) {
                    DB::table('tags')->where('id', $tag->id)->delete();    
                }
            }
        }

        return redirect('admin/contactos')->with('success', 'Se ha modificado el contacto correctamente.');
    }

    public function delete($id) {
        $contacto = Contacto::find($id);
        $contacto->delete();

        return redirect('admin/contactos')->with('success',  'Se ha borrado el contacto con éxito.');
         
    }

    public function deleteMultiple(Request $request)
    {
        $contactosEliminar = json_decode($request->listaID);

        for ($i=0; $i < count($contactosEliminar); $i++) { 
            $contacto = Contacto::find($contactosEliminar[$i]);

            $contacto->delete();
        }

        echo "Se han borrado los contactos con éxito.";
        
    }
   
}
