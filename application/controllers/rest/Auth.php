<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';
//include APPPATH . 'third_party/community_auth/library/Authentication.php';
/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Auth extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->helper('url');
        //$this->load->helper('auth');
        $this->load->helper('form');
        $this->load->model('auth_model');
        //$this->load->library('Authentication');
    }

    public function user_get()
    {
        //Get params
        $username       =   $this->get('username');
        $Password       =   $this->get('password');
        $requirement    =   '1';
        if (!empty($username) && !empty($Password)) 
        { 
            if($auth_data = $this->auth_model->get_auth_data($username))
            {
                if( !$this->_user_confirmed( $auth_data, $requirement, $Password ))
                {
                    $this->response([array('status' => "User Not Found")], REST_Controller::HTTP_NOT_FOUND); 
                }
                else
                {                    
                    $this->response($this->apimodel->usersInfo($auth_data->user_id), REST_Controller::HTTP_OK);
                }
            }else
            {
                $this->response([array('status' => "User Not Found")], REST_Controller::HTTP_NOT_FOUND); 
            }
        }
        else
        {
            $this->response([array('status' => FALSE)], REST_Controller::HTTP_NOT_FOUND); 
        }
    }    

    private function _user_confirmed( $auth_data, $requirement, $passwd = FALSE )
    {
        // Check if user is banned
        $is_banned = ( $auth_data->banned === '1' );

        // Is this a login attempt
        if( $passwd )
        {
            // Check if the posted password matches the one in the user record
            $wrong_password = ( ! $this->check_passwd( $auth_data->passwd, $passwd ) );
        }

        // Else we are checking login status
        else
        {
            // Password check doesn't apply to a login status check
            $wrong_password = FALSE;
        }

        // Check if the user has the appropriate user level
        $wrong_level = ( is_int( $requirement ) && $auth_data->auth_level < $requirement );

        // Check if the user has the appropriate role
        $wrong_role = ( is_array( $requirement ) && ! in_array( $this->roles[$auth_data->auth_level], $requirement ) );

        // If anything wrong
        if( $is_banned OR $wrong_level OR $wrong_role OR $wrong_password )
            return FALSE;

        return TRUE;
    }

    private function check_passwd( $hash, $password )
    {
        if( is_php('5.5') && password_verify( $password, $hash ) ){
            return TRUE;
        }else if( $hash === crypt( $password, $hash ) ){
            return TRUE;
        }

        return FALSE;
    }

    public function social_login($username_or_email_address) {
        // Add the username or email address of the user you want logged in:
        //$username_or_email_address = '';

        if (!empty($username_or_email_address)) {
            $auth_model = $this->authentication->auth_model;

            // Get normal authentication data using username or email address
            if ($auth_data = $this->{$auth_model}->get_auth_data($username_or_email_address)) {
                /**
                 * If redirect param exists, user redirected there.
                 * This is entirely optional, and can be removed if
                 * no redirect is desired.
                 */
                $this->authentication->redirect_after_login();

                // Set auth related session / cookies
                $this->authentication->maintain_state($auth_data);
            }
        } else {
            echo 'Example requires that you set a username or email address.';
        }
    } 
}
?>