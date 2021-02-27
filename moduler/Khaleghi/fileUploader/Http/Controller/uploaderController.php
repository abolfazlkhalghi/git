<?php
namespace Khaleghi\fileuploader\Http\controller;

use App\Http\Controllers\Controller;



class uploaderController extends Controller
{
    public function FileUploader(){

        return view('livewire.file-uploader');

    }
}
