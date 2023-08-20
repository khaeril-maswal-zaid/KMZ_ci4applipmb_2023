<?php

namespace App\Controllers;

class PostFotoAjax extends BaseController
{
    //--------------------------------------------------------


    public function photocamaba($nama, $nik)
    { 
        $test = explode('.', $_FILES["file"]["name"]); //dd($test);
        $ext = end($test);
        $name = url_title($nama, '-', true) . '_' . $nik . '.' . $ext;

        $location = 'img/fotocamaba' . date('Y') . '/' . $name;

        move_uploaded_file($_FILES["file"]["tmp_name"], $location);
        echo '<img src="/' . $location . '" height="80" width="155" class="mt-2 img-thumbnail" />';
        echo '<input type="hidden" name="fotopost" value="' . $name . '" class="form-control">';
    }
}
