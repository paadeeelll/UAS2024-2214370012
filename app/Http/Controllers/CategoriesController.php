<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
public function index() { /* menampilkan semua artikel */ }
public function create() { /* form untuk membuat artikel */ }
public function store(Request $request) { /* menyimpan artikel baru */ }
public function edit($id) { /* form untuk mengedit artikel */ }
public function update(Request $request, $id) { /* mengupdate artikel */ }
public function destroy($id) { /* menghapus artikel */ }

}
