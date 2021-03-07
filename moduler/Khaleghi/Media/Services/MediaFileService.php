<?php

namespace Khaleghi\Media\Services;

use Khaleghi\Media\Models\Media;

class MediaFileService
{
    public static function upload($file)
    {
        $extension = strtolower($file->getClientOriginalExtension());
        //dd($extension);
        switch($extension){
            case 'jpg':
            case 'png':
            case 'jpeg':
                $media= new Media();
                $media->files=ImageFileService::upload($file);
                $media->type='image';
                $media->user_id=auth()->id(); 
                $media->filename=$file->getClientOriginalExtension();
                $media->save();
              
                return $media;
               
                //ImageFileService::upload($file);
                break;
            case 'mp4':
            case 'avi':
                VideoFileService::upload($file);
                break;
        }
        // foreach (config('mediaFile.MediaTypeServices') as $key => $service) {
        //     if (in_array($extension, $service['extensions'])) {
        //         $media = new Media();
        //         $media->files = $service["handler"]::upload($file);
        //         $media->type = $key;
        //         $media->user_id = auth()->id();
        //         $media->filename = $file->getClientOriginalName();
        //         $media->save();
        //         return $media;
        //     }
        }


    public static function delete($media)
    {
        switch ($media->type) {
            case 'image':
                ImageFileService::delete($media);
            break;
        }
  }
}

