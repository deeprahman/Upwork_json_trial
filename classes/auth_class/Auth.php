<?php

namespace classes\auth_class;
/**
 * Class Auth
 * @package classes\auth_class
 * This class takes-
 * 1.Input username;
 * 2.Input Password;
 * 3.An array containing registered user names;
 * 4.A array containing corresponding passwords;
 * 5.An array containing admin usernames;
 * 6.An array containing admin passwords;
 *
 */
class Auth
{
    protected $input_usrname;
    protected $input_pass;

    protected $usrname_array = [];
    protected $pass_array = [];
    private $admin_name_array;
    private $admin_pass_array;

    protected $usr_id;

    public function __construct(string &$usrname,
                                string &$passwrd,
                                array &$usr_array,
                                array &$pass_array,
                                array &$adm_name,
                                array &$adm_pass)
    {
        $this->input_usrname =& $usrname;
        $this->input_pass =& $passwrd;
        $this->usrname_array =& $usr_array;
        $this->pass_array =& $pass_array;
        $this->admin_name_array =& $adm_name;
        $this->admin_pass_array =& $adm_pass;
    }

//    Match the entered username password and return the corresponding key
//This method needs optimisation
//The problem is : when not an admin, search through the admin array
    public function matchPass(): array
    {
        //search username array

        $key = array_search($this->input_usrname,
            $this->usrname_array);
        //admin = -1 : user is not an admin
        if ($key !== FALSE){
            $admin = -1;
        }

        if ($key === FALSE) {
            //admin = 0 : user not exist
            $admin = 0;
            //search admin name array
            $key = array_search($this->input_usrname,
                $this->admin_name_array);
            if ($key !== FALSE) {
                //admin = 1 : user is an admin.
                $admin = 1;
            }
        }
        switch ($admin) {
            case -1:
                {
                    if (
                        $this->input_pass == $this->pass_array[$key]
                    ) {
                        return [$admin, $key];
                    } else {
                        return [$admin, NULL];
                    }
                    break;
                }
            case 1:
                {
                    if (
                        $this->input_pass == $this->admin_pass_array[$key]
                    ) {
                        return [$admin, $key];
                    } else {
                        return [$admin, NULL];
                    }
                    break;
                }
            case 0:
                {
                    return [$admin, NULL];
                }
                break;

        }
    }

}