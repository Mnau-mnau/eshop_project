<?php

class view 
{
    // property of the class =name (part of the path) of the .php file that contains information about the html code 
    //contact/form ../system/project/views/contact/form.php
    protected $template_name = null;

    public $template_variables = array();

    // creates a new object of the class view with assigned property $template_name
    public function __construct($template_name) //object template inside of the class
    {
        $this->template_name = $template_name; // connects inserted parameter 
        //$template_name with the property of the class
    } 

    //print the contents of the template
    public function render($print = true)
    {
        $rendered_content = $this->getRenderedContent();
        if($print)
        {
            //echo the content of the file
            echo $rendered_content;
        }
        else
        {
            //return the contents of the file
            return $rendered_content;
        }
    }
    protected function getRenderedContent()
    {
        ob_start(); //this function of output buffer loads the data but doesn't display them
        // it prepares the data for displaying

        extract($this->template_variables); //this gets the data from $_POST and turns the keys into variables
        //gets this $name; 'somename', $email; 'someemail', $message; 'somemessage', $newsletter; 1

        include (VIEWS_DIR.'/'. $this->template_name. '.php');//this is what is going to be displayed
        //this output buffer function cleans out the buffer and displays the data
        return ob_get_clean();
    }

    //this function takes rendered content and prints it, so you only echo the template in controller 
    public function __toString()
    {
        return $this->render(false);
    }

    //this can set a variable of existing property inside the object in an easy way
    public function __set($name, $value)
    {
        $this->template_variables[$name] = $value;
    }
    public function __get($name)
    {
        if(array_key_exists($name, $this->template_variables))
    {
      return $this->template_variables[$name];
    }
    $trace = debug_backtrace();
    trigger_error(
        'Undefined property via __get(): ' . $name .
        ' in ' . $trace[0]['file'] .
        ' on line ' . $trace[0]['line'],
        E_USER_NOTICE);
    }

    public function __isset($name)
    {
        return isset($this->template_variables[$name]);
    }

    public function __unset($name)
    {
        unset($this->template_variables[$name]);
    }
}