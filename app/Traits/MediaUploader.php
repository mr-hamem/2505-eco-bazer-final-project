<?php

namespace App\Traits;

trait MediaUploader
{

    public function uploadImg($images, $dir = 'others', $visibility = 'public')
    {
        if (is_array($images)) {
            return  $this->multipleImageUpload($images, $dir, $visibility);
        } else {
            return  $this->singleImageUpload($images, $dir, $visibility);
        }
    }

    private function singleImageUpload($image, $dir = 'others', $visibility = 'public')
    {
        // Image upload
        if ($image) {
            // *Server save
            return  $image->store($dir, $visibility);
        }

        return null;
    }


    private function multipleImageUpload($images, $dir = 'others', $visibility = 'public')
    {
        $imagesUrl = [];
        if (count($images) > 0) {
            foreach ($images as $img) {
                $imagesUrl[] =  $img->store('products', 'public');
            }
        }

        return $imagesUrl;
    }
}
