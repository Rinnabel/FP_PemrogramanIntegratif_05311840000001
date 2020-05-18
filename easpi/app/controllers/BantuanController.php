<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Bantuan;
use App\Core\FlashMessage;

class BantuanController {

    public function index() {
        $bantuans = Bantuan::findAll();

        View::render("Bantuan/index.html", [
            "bantuans" => $bantuans
        ]);
    }
    
    public function show($params) {

        $id = $params[0];

        $bantuan = Bantuan::findBantuanById($id);
        
        View::render("Bantuan/show.html", [
            "bantuan" => $bantuan
        ]);
    }
    
    public function add() {

        // Jika insert berhasil
         if(Bantuan::insert($_POST) > 0) {
            FlashMessage::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/Bantuan');
        } else {
            FlashMessage::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/Bantuan');
        } 
    }
 
    public function search() {
        $keyword = $_POST['keyword'];
        
        $bantuans = Bantuan::search($keyword);

        View::render("Bantuan/index.html", [
            "bantuans" => $bantuans
        ]);
    }

}