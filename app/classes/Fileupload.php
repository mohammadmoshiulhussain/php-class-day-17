<?php
namespace App\classes;
class Fileupload
{
    protected $image;
    public function __construct($post = null)
    {
        $this->image = $post['image'];
    }
    public function index()
    {

    }
}