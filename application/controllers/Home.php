<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @property CI_Loader $load
* @property CI_Form_validation $form_validation
* @property CI_Input $input
* @property CI_Email $email
* @property Mysmarty $mysmarty
*/

class Home extends CI_Controller
{
    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct();        
    }
     
    /**
     * Default function that will be executed unless another method specified
     */
    public function home()
    {  
        // basic assignment for passing data to template file
        $this->smarty->assign('base_url', base_url());
        $this->smarty->assign('css_url', base_url().'/assets/css/');
        $this->smarty->assign('js_url', base_url().'/assets/js/');
        $this->smarty->assign('url', anchor('/login_validated','S\'enrégistrer','class="btn btn-primary"'));
        $this->smarty->assign('loginTitle', "Admin");
        
        // show the template
        $this->smarty->view('login/loginpage.tpl');         
    }
    
    public function loginValidated()
    {  
        $this->smarty->assign('css_url', base_url().'/assets/css/');
        $this->smarty->assign('js_url', base_url().'/assets/js/');
        
        // show the template
        $this->smarty->view('config/configpage.tpl');         
    }
}