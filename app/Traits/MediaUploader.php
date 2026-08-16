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
        if ($image) {
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/' . $dir), $filename);
            return 'uploads/' . $dir . '/' . $filename;
        }

        return null;
    }


    private function multipleImageUpload($images, $dir = 'others', $visibility = 'public')
    {
        $imagesUrl = [];
        if (count($images) > 0) {
            foreach ($images as $img) {
                $filename = time() . '_' . $img->getClientOriginalName();
                $img->move(public_path('uploads/' . $dir), $filename);
                $imagesUrl[] = 'uploads/' . $dir . '/' . $filename;
            }
        }

        return $imagesUrl;
    }
}