<?php

class Category_Object
{
    // as the product is being created from the resultset, these properties 
    // are automaticaly created and initialized 
    public function getUrl()
    {
        return url::to('category', array('id' =>$this->id));
    }
}