<?php

class AddProduct_Object
{
    public function getUrl()
    {
        return url::to('addproduct', array(
            'id' => $this->id
        ));
    }
}