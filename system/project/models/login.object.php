<?php

class Login_Object
{
    public function getUrl()
    {
        return url::to('login', array(
            'id' => $this->id
        ));
    }
}