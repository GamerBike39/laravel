<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{

    /**
     * return all books
     *
     */
    public function index()
    {
        // return view('livre', [
            //     'livres' => Livre::all()
            // ]);
            $livres = Livre::all();
            return view('livre.index', compact('livres'));

        }

        /**
         * return a book
         *
         */
        public function show($id)
        {
            $livre = Livre::findOrFail($id);
            return view('livre.show', [
                'livre' => $livre
            ]);
        }

        /**
        * return le formulaire de création d'un livre
        */
        public function create()
        {
            return view('livre.create');
        }

        /**
         * register a new book
         * @param Request $request
         *
         */
        public function store (request $request) {
        $request -> validate([
            'title' => 'required',
            'author' => 'required',
            'desc' => 'required',
            'price' => 'required',
            // 'image' => 'required',
        ]);

        $livre = new Livre([
            'title' => $request->get('title'),
            'author' => $request->get('author'),
            'desc' => $request->get('desc'),
            'price' => $request->get('price'),
            // 'image' => $request->get('image'),
        ]);

        $livre->save();
        return redirect('/')->with('success', 'Livre enregistré!');
    }



    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {
        $livre = livre::findOrFail($id);
        return view('livre.edit', compact('livre'));
    }

    /**
     * Update a book
     * @param Request $request
     * @param $id
     *
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'desc' => 'required',
            'price' => 'required',
            // 'image' => 'required',
        ]);

        $livre = Livre::findOrFail($id);
        $livre->title = $request->get('title');
        $livre->author = $request->get('author');
        $livre->desc = $request->get('desc');
        $livre->price = $request->get('price');
        // $livre->image = $request->get('image');
        $livre->save();

        return redirect('/')->with('success', 'Livre modifié!');
    }

    /**
     * Delete a book
     * @param $id
     *
     */
    public function destroy($id)
    {
        $livre = Livre::findOrFail($id);
        $livre->delete();

        return redirect('/')->with('success', 'Livre supprimé!');
    }


}
