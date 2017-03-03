<?php

class Product_Object
{
    public function getUrl()
    {
        return url::to('detail', array(
            'id' => $this->id
        ));
    }
}