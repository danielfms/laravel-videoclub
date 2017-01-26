<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{

  public function getIndex(){
    $peliculas = Movie::all();
    return view('catalog.index', ['arrayPeliculas' => $peliculas]);
  }

  public function getShow($id){
    $pelicula = Movie::findOrFail($id);
    return view('catalog.show', ['pelicula' => $pelicula ]);
  }

  public function getCreate(){
    return view('catalog.create');
  }

  public function getEdit($id){
    $pelicula = Movie::findOrFail($id);
    return view('catalog.edit', ['pelicula' => $pelicula ]);
  }
}
