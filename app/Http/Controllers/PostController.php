<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $posts = $response->json();

        return view('posts.index', compact('posts'));
    }

    public function edit($id)
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        $post = $response->json();

        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        /* Simular que se hizo un update a la aplicacion */
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/'.$id, [
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        /* Simular una respuesta */
        if ($response->successful()) {
            return redirect()->route('post.index')->with('success', 'El post ha sido actualizado correctamente!');
        } else {
            return redirect()->route('post.index')->with('error', 'Actualizar el post ha fallado. Intentelo otra vez');
        }
    }

    public function destroy($id)
    {
        /* Simulacion de la captura de ese post para borrarlo */
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);

        /* Simulacion de respuesta al borrar  */
        if ($response->successful()) {
            return redirect()->route('posts.index')->with('success', 'Post borrado con exito!');
        } else {
            return redirect()->route('posts.index')->with('error', 'Fallo al borrarl el post. Intentelo otra vez');
        }
    }
}
