<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $newBlog = new Blog();
        $newBlog->user_id = 1;
        //$_SESSION['userId']
        $newBlog->title = Input::get('title');
        $newBlog->desc_short = Input::get('shortDesc');
        $newBlog->desc_long = Input::get('longDesc');
        $newBlog->date = date('Y-m-d');

        $newBlog->save();

        if ($request->file('image')->isValid()) {
            echo'xx';
            $newImage = new Image();
            $newImage->blog_id = $newBlog->id;
            $newImage->filename = pathinfo(Input::file('image'), PATHINFO_FILENAME);
            $newImage->image_type = pathinfo(Input::file('image'), PATHINFO_EXTENSION);

            $newImage->save();
            $request->file('image')->move("C:/xampp/htdocs/blog_payrexx/blog/storage/images/", $newImage->filename);
        }
        else {

        }

        //$newImage->bild_typ = ;
        /*if (array_key_exists('img', $_FILES)) {

            $uploadFolder = 'blog/storage/images'; //Das Upload-Verzeichnis
            $filename = pathinfo($_FILES['img']['name'], PATHINFO_FILENAME);
            $extension = strtolower(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));

            //Überprüfung der Dateiendung
            $allowed_extensions = array('png', 'jpg', 'jpeg', 'gif');
            if (!in_array($extension, $allowed_extensions)) {
                echo "extension = $extension";
                die("Ungültige Dateiendung. Nur png, jpg, jpeg und gif-Dateien sind erlaubt");
            }

            //Überprüfung dass das Bild keine Fehler enthält
            if (function_exists('exif_imagetype')) { //Die exif_imagetype-Funktion erfordert die exif-Erweiterung auf dem Server
                $allowed_types = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
                $detected_type = exif_imagetype($_FILES['img']['tmp_name']);
                if (!in_array($detected_type, $allowed_types)) {
                    die("Nur der Upload von Bilddateien ist gestattet");
                }
            }

            //Pfad zum Upload
            $new_path = $uploadFolder . $filename . '.' . $extension;

            //Neuer Dateiname falls die Datei bereits existiert
            if (file_exists($new_path)) {
                //Falls Datei existiert, hänge eine Zahl an den Dateinamen
                $id = 0;
                do {
                    $id++;
                    $new_path = $uploadFolder . $filename . '_' . $id . '.' . $extension;

                } while (file_exists($new_path));
                $filename = $filename . '_' . $id;
            }

            //Alles okay, verschiebe Datei an neuen Pfad
            move_uploaded_file($_FILES['img']['tmp_name'], $new_path);

            echo 'Bild erfolgreich hochgeladen: <a href="' . $new_path . '">' . $new_path . '</a>';
        }*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
