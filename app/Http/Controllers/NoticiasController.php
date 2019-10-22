<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $noticias = Noticia::all();

        return view('admin.noticias.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.noticias.crear');
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
            'autor'=>'required|min:2',
            'titulo'=>'required|string|min:5|max:255',
            'thumbnail'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            'contenido'=>'required|string'
        ]);

        $imageName = pathinfo($request->file('thumbnail')->getClientOriginalName(), PATHINFO_FILENAME).'-'.time().'.'.$request->file('thumbnail')->getClientOriginalExtension();
        $request->file('thumbnail')->move(public_path()."/upload/thumbnail/", $imageName);

        $noticia = new Noticia([
            'titulo'=> $request->get('titulo'),
            'slug'=> str_slug($request->get('titulo'), '-'),
            'imagen'=> $imageName,
            'autor'=> $request->get('autor')
        ]);

        libxml_use_internal_errors(true);

        //Creamos un DomDocument, que leerá el contenido y lo preparará para añadirlo como HTML y UTF-8 en la BBDD
        $dom = new \DomDocument();
        $dom->loadHtml(mb_convert_encoding($request->get('contenido'), 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    

        //Recogemos todas las imágenes y las añadimos en la carpeta upload
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);
            $image_name= "/upload/" . time().$k.'.jpg';
            $path = public_path() . $image_name;

            file_put_contents($path, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $noticia->contenido = $dom->saveHTML();

        $noticia->save();

        return redirect('admin/noticias/')->with('success', 'Se ha añadido la noticia satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $noticia = Noticia::find($id);

        return view('admin.noticias.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*$request->validate([
            'titulo'=>'required',
            'contenido'=>'required|',
        ]);*/

        $noticia = Noticia::find($id);

        $request->validate([
            'titulo'=>'required|string|min:5|max:255',
            'contenido'=>'required|string',
            'thumbnail'=>'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'autor'=>'required|min:2'
        ]);

        if ($request->hasFile('thumbnail')) {
            $imageName = pathinfo($request->file('thumbnail')->getClientOriginalName(), PATHINFO_FILENAME).'-'.time().'.'.$request->file('thumbnail')->getClientOriginalExtension();
            $request->file('thumbnail')->move(public_path()."/upload/thumbnail/", $imageName);

            //unlink(public_path()."/upload/thumbnail/".$noticia->imagen);
            $noticia->imagen = $imageName;
        }

        $noticia->titulo = $request->get('titulo');
        $noticia->slug = str_slug($noticia->titulo, '-');
        $noticia->contenido = $request->get('contenido');
        $noticia->autor = $request->get('autor');

        libxml_use_internal_errors(true);

        //Creamos un DomDocument, que leerá el contenido y lo preparará para añadirlo como HTML y UTF-8 en la BBDD
        $dom = new \DomDocument();
        $dom->loadHtml(mb_convert_encoding($request->get('contenido'), 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    

        //Recogemos todas las imágenes y las añadimos en la carpeta upload
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            //Comprobamos que la imagen no exista, para poder añadirla en la carpeta upload
            if (!file_exists(public_path().$img->getAttribute('src'))) {
                $data = $img->getAttribute('src');

                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);

                $data = base64_decode($data);
                $image_name= "/upload/" . time().$k.'.jpg';
                $path = public_path() . $image_name;

                file_put_contents($path, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
        }

        $noticia->contenido = $dom->saveHTML();

        $noticia->save();

        return redirect('admin/noticias')->with('success',  'Se ha modificado la noticia correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $noticia = Noticia::find($id);

        $noticia->delete();

        return redirect('admin/noticias')->with('success',  'Se ha borrado la noticia con éxito.');
    }
}
