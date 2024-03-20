<?php
namespace Image;

function image($file): Image
{
   return new Image($file);
}
