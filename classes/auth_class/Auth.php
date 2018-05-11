<?php
/**
 * Created by PhpStorm.
 * User: dprah
 * Date: 5/11/2018
 * Time: 6:33 PM
 */

namespace classes\auth_class;


class Auth
{
    protected $input_usrname;
    protected $input_pass;

    protected $usrname_array=[];
    protected $pass_array=[];
    private $admin_name_array;
    private $admin_pass_array;

    protected  $usr_id;

    public function __construct(string &$usrname,
                                string &$passwrd,
                                array &$usr_array,
                                array &$pass_array,
                                array &$adm_name,
                                array &$adm_pass)
    {
       $this->input_usrname =& $usrname;
       $this->input_usrname =& $passwrd;
       $this->usrname_array =& $usr_array;
       $this->pass_array =& $pass_array;
       $this->admin_name_array =& $adm_name;
       $this->admin_pass_array =& $adm_pass;
    }

//    Match the entered username password and return the corresponding key
    public function matchPass():array {
        //search username array

        $key = array_search($this->input_usrname,
                            $this->usrname_array);
        //admin = -1 : user is not an admin
        $admin= -1;
        if (empty($key)){
            //admin = 0 : user not exist
            $admin = 0;
        }else{
            //search admin name array
            $key =array_search($this->input_usrname,
                $this->admin_name_array);
            if ($key){
                //admin = 1 : user is an admin.
                $admin = 1;
            }
        }

    }

}