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
    public function index()
    {  
        // basic assignment for passing data to template file
        $this->smarty->assign('base_url', base_url());
        $this->smarty->assign('css_url', './assets/css/');
        $this->smarty->assign('js_url', './assets/js/');
        $this->smarty->assign('register', anchor('/login_validated','S\'enrégistrer','class="btn btn-primary"'));
        $this->smarty->assign('login', 'index.php/login_validated');
        $this->smarty->assign('dashboard', '/dashboard');
        $this->smarty->assign('loginTitle', "Admin");
        
        // show the template
        $this->smarty->view('login/loginpage.tpl');         
    }
    public function home()
    {  
        // basic assignment for passing data to template file
        $this->smarty->assign('css_url', '../assets/css/');
        $this->smarty->assign('js_url', '../assets/js/');
        $this->smarty->assign('register', anchor('/login_validated','S\'enrégistrer','class="btn btn-primary"'));
        $this->smarty->assign('login', 'login_validated');
        $this->smarty->assign('dashboard', '/dashboard');
        $this->smarty->assign('loginTitle', "Admin");
        
        // show the template
        $this->smarty->view('login/loginpage.tpl');         
    }
    
    public function loginValidated()
    {  
        $this->smarty->assign('css_url', '../assets/css/');
        $this->smarty->assign('js_url', '../assets/js/'); 
        $this->smarty->assign('home', 'home');
        
        // show the template
        $this->smarty->view('config/configpage.tpl');         
    }
    
    public function dashboard()
    {  
        $this->smarty->assign('css_url', '../assets/css/');
        $this->smarty->assign('js_url', '../assets/js/');
        $this->smarty->assign('home', 'home');
        $this->smarty->assign('dashboard', 'dashboard');
        $this->smarty->assign('basedata', 'basedata');
        
        // show the template
        $this->smarty->view('dashboard/dashboard.tpl');         
    }
    public function basedata()
    {  
        $this->smarty->assign('css_url', '../assets/css/');
        $this->smarty->assign('js_url', '../assets/js/');
        $this->smarty->assign('home', 'home');
        $this->smarty->assign('dashboard', 'dashboard');
        $this->smarty->assign('basedata', 'basedata');
        
        // show the template
        $this->smarty->view('basedata/basedatapage.tpl');         
    }
}