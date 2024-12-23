<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    //class AnimalController extends Controller {
    public function index() {
        echo "Menampilkan data animals";
    }

    public function store() {
        echo "Menambahkan hewan baru";
    }

    public function update($id) {
        echo "Mengupdate data hewan id $id";
    }

    public function destroy($id) {
        echo "Menghapus data hewan id $id";
    }

}
