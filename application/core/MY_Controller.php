<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
 
/**
 * CodeIgniter MY_Controller Class
 *
 * initializes common controller settings, this is to be derived by all controllers of this application
 *
 * @name    MY_Controller 
 * @category    Core Libraries
 * @author  Md. Ali Ahsan Rana
 * @link    http://codesamplez.com/
 */
 
/**
 * @property Mysmarty $mysmarty
 */
class MY_Controller extends CI_Controller
{    
     /**
     * constructor
     */
    function __construct()
    {
        parent::__construct();                       
    }
    
    /**
     * final view codes for showing template
     */
    function view($templates,$data=NULL)
    {
        //assigns all data as smarty variables. Reduces smarty assignment in controllers
        if($data != NULL)
        {
            foreach($data as $key => $value)
            {
                $this->smarty->assign($key, $value);
            }
        }       
        
        $this->smarty->display($templates.".tpl");
    }    
}
