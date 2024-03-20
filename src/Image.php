<?php

namespace Image;

class Image
{
   private array $array = [];

   public function __construct(array $array = [])
   {
       $this->array = $array;
   }

   public function img($img)
   {
    $uploadfile= '';
    if($img['size']>0){
        $uploaddir = '../../../public/images/';
        $uploadfile = $uploaddir . basename($img['name']);
        if (move_uploaded_file($img['tmp_name'], $uploadfile)) {
            $img = $uploadfile;
        }
    }
    return $uploadfile;
   }

}