<?php


if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

class Account extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * create a account
     *
     * @param [type] $identity
     * @param [type] $password
     * @param [type] $first_name
     * @param [type] $last_name
     * @param [type] $role
     * @return void
     */
    public function create_account($identity, $password, $first_name, $last_name, $role)
    {
        if (!$this->check_email($identity)) {

            // if the new user was created successfully
            if ($this->insert('users', [
                'identity'         => $identity,
                'password'      => password_hash($password, PASSWORD_DEFAULT),
                'created_on'    => time(),
                'modified_on'   => time(),
                'is_active'     => 1,
                'is_online'     => 0,
                'thumbnail_url' => ASSETS_URL . '/img/avatar3.png',
                'first_name'    => $first_name,
                'last_name'     =>  $last_name,
            ])) {
                $user_id = $this->id(); // get the last inserted id
                $role_id = $this->get_role_id($role); // get the role id

                // create a new role for the user
                $this->create_user_meta($user_id, 'user_role', $role_id);
            }
        }

        return false;
    }

    /**
     * create a meta value
     *
     * @param [type] $user_id
     * @param [type] $key
     * @param [type] $value
     * @return void
     */
    public function create_meta($user_id, $key, $value)
    {
        $this->insert('users_meta', [
            'user_id'    => $user_id,
            'meta_key'   => $key,
            'meta_value' => $value,
        ]);

        return true;
    }

    /**
     * create role
     *
     * @param [type] $role_name
     * @param [type] $role_description
     * @return void
     */
    public function create_role($role_name, $role_description)
    {
        // checks if the role exists first
        if (!$this->confirm_role($role_name)) {
            $this->insert('roles', [
                'title'        => $role_name,
                'description' => $role_description
            ]);

            // the role was created successfully
            return true;
        }

        // the role was not created
        return false;
    }

    /**
      * create a reset token for the user
      *
      * @param string $email
      * @return bool
      */
    public function create_reset_token(string $email)
    {
        $token = $this->generate_token();

        if ($this->confirm_identity($email)) { // the user has an account with us
            // get user id
            $user_id = $this->get_account_id($email);

            // make the user inactive and offline
            $this->make_user_inactive($user_id);
            $this->make_user_offline($user_id);

            if ($this->insert('password_resets', [
                 'email'      => $email,
                 'token'      => $token,
                 'created_on' =>  time(),
             ])) {
                return true;
            }
        }

        return false; // the user has no account with us
    }

    /**
     * delete a account by user id
     *
     * @param integer $user_id
     * @return void
     */
    public function delete_account(int $user_id)
    {
        $this->delete("users", ['id' => $user_id]);
        $this->delete("users_meta", ['user_id' => $user_id]);
    }

    /**
      * delete_user_meta
      *
      * @param integer $user_id
      * @return void
      */
    public function delete_user_meta(int $user_id)
    {
        if ($this->delete('users_meta', [
             'user_id' => $user_id
         ])) {
            return true;
        }

        return false;
    }

    /**
      * delete_user_meta
      *
      * @param integer $user_id
      * @return void
      */
    public function delete_single_user_meta(int $user_id, $key = "")
    {
        if ($this->delete('users_meta', [
             'user_id' => $user_id,
             'meta_key'	=> $key
         ])) {
            return true;
        }

        return false;
    }

    /**
      * update the user account
      *
      * @param integer $user_id
      * @param array $data
      * @return bool
      */
    public function update_account(int $user_id, $data = array())
    {

         // add the modified time here
        $data['modified_on'] = time();

        if ($this->update('users', $data, [
             'id'          => $user_id,
         ])) {
            return true;
        }

        return false;
    }

    /**
     * update the a single user's meta fields
     *
     * @param integer $user_id
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function update_single_meta(int $user_id, $key, $value)
    {
        if ($this->update('users_meta', [
              'meta_value'	=> $value
          ], [
              'user_id' => $user_id,
              'meta_key'	=> $key
          ])) {
            return true;
        }
    }

    /**
     * get a single account by id
     *
     * @param integer $user_id
     * @return void
     */
    public function get_account(int $user_id)
    {
        return $this->get("users", "*", ['id' => $user_id]);
    }

    /**
     * get a account id by identity
     *
     * @param string $identity
     * @return void
     */
    public function get_account_id(string $identity)
    {
        return $this->get("users", "id", ['identity' => $identity]);
    }

    /**
     * get all accounts on the site
     *
     * @return void
     */
    public function get_accounts()
    {
        return $this->select("users", "*");
    }

    /**
     * get all the roles on the site
     *
     * @return void
     */
    public function get_roles()
    {
        return $this->select("roles", "*");
    }

    /**
     * get a role by id
     *
     * @param [type] $role_id
     * @return void
     */
    public function get_role($role_id)
    {
        return $this->get("roles", "*", ['id' => $role_id]);
    }

    /**
     * get a role by its id
     *
     * @param [type] $role_id
     * @return void
     */
    public function get_role_by_title($role_id)
    {
        return $this->get("roles", "*", ['id' => $role_id]);
    }

    /**
     * get a role id by its title
     *
     * @param [type] $title
     * @return void
     */
    public function get_role_id($title)
    {
        return $this->get("roles", "id", ['title' => $title]);
    }

    /**
     * get a role description by its title
     *
     * @param [type] $title
     * @return void
     */
    public function get_role_description_by_title($title)
    {
        return $this->get("roles", "description", ['title' => $title]);
    }

    /**
     * get a role description by its id
     *
     * @param [type] $title
     * @return void
     */
    public function get_role_description_by_id($id)
    {
        return $this->get("roles", "description", ['id' => $id]);
    }

    /**
      * get user meta value
      *
      * @param int $user_id
      * @return void
      */
    public function get_single_meta_value($user_id, $key)
    {
        $data = $this->get("users_meta", [
              'meta_value'
          ], [
              'user_id' => $user_id,
              "meta_key"	=> $key
          ]);

        return $data['meta_value'];
    }

    /**
      * get the data associated with a particular user
      *
      * @param integer $user_id
      * @return void
      */
    public function get_userdata($user_id = "")
    {
        if (empty($user_id) && isset($user_id)) {
            $identity = $_SESSION['login_data']['user_id'];
        } else {
            $identity = $user_id;
        }

        //  get the user data
        $userdata = $this->get("users", "*", [
              'id' 	=> $identity
          ]);

        // get user role
        $role_id = $this->get_single_meta_value($user_id, 'user_role');
        $billing_address = $this->get_single_meta_value($user_id, 'billing_address');
        $payment_method = $this->get_single_meta_value($user_id, 'payment_method');
        $billing_state = $this->get_single_meta_value($user_id, 'billing_state');
        $roledata = $this->get("roles", "*", [
              'id'	=> $role_id
          ]);

        $userdata['role']	= $roledata;
        $userdata['billing_address']	= $billing_address;
        $userdata['payment_method']	= $payment_method;
        $userdata['billing_state']	= $billing_state;

        return $userdata;
    }

    /**
     * confirm the identity of a user
     *
     * @param string $identity
     * @return void
     */
    public function confirm_identity($identity = "")
    {
        if ($this->has("users", ['identity' => $identity])) {
            return true;
        };

        return false;
    }

    /**
     * confirm a role
     *
     * @param string $role
     * @return void
     */
    public function confirm_role(string $role)
    {
        if ($this->has('roles', [
             'title'  => $role
         ])) {
            return true;
        }

        return false;
    }

    /**
     * confirm a user meta exists
     *
     * @param integer $user_id
     * @param string $key
     * @param [type] $value
     * @return void
     */
    public function confirm_meta(int $user_id, string $key, $value)
    {
        if ($this->has('users_meta', [
           'user_id'    => $user_id,
           'meta_key'   => $key,
           'meta_value' => $value,
       ])) {
            return true;
        }

        // the meta doesnt exist
        return false;
    }

    /**
     * confirm a meta key exists
     *
     * @param integer $user_id
     * @param string $key
     * @return void
     */
    public function confirm_meta_key(int $user_id, string $key)
    {
        if ($this->has('users_meta', [
            'user_id'    => $user_id,
            'meta_key'   => $key,
        ])) {
            return true;
        }

        // the meta doesnt exist
        return false;
    }

    /**
     * confirm a admin account
     *
     * @param integer $user_id
     * @return void
     */
    public function confirm_admin_account(int $user_id)
    {
        $admin_role_id = $this->get_role_id("admin");

        if ($this->confirm_meta($user_id, 'user_role', $admin_role_id)) {
            return true;
        }

        return false;
    }

    /**
     * confirm an account
     *
     * @param [type] $identity
     * @param [type] $password
     * @return void
     */
    public function confirm_account($identity, $password)
    {
        // checks if the idneity$identity exists first
        if ($this->confirm_identity($identity)) {
            // since the email was found
            $data = $this->select('users', [
               'id',
                'identity',
                'password',
                'first_name',
                'last_name',
            ], [
                'identity' => $identity,
            ]);

            $data_count = count($data);

            // check whether the password inserted matches
            for ($i=0; $i < $data_count; $i++) {
                if (password_verify($password, $data[$i]['password'])) {

                    // make the user online
                    $this->make_user_online($data[$i]['id']);

                    // create a session to store user data
                    $_SESSION['login_data'] = array(
                        'user_id'   => $data[$i]['id'],
                        'identity'     => $data[$i]['identity'],
                        'first_name'     => $data[$i]['first_name'],
                        'last_name'     => $data[$i]['last_name'],
                    );

                    // the password match has been found
                    return true;
                }


                // the password doesn't match so leave the loop
                return false;
            }
        }

        return false;
    }

    /**
     * logout a user
     *
     * @param [type] $identity
     * @return void
     */
    public function logout_account($identity)
    {
        if (!isset($identity)) {
            return false;
        } else {
            if (is_integer($identity)) {
                $user_id = $identity;

                // make the user offline
                $this->make_user_offline($user_id);
            } elseif (is_string($identity)) {
                $user_id = $this->get_user_id($identity);

                // make the user offline
                $this->make_user_offline($user_id);
            }

            // destroy the session
            unset($_SESSION['login_data']);
            session_destroy();
            session_start();
        }
    }

    /**
     * check if a user is logged in
     *
     * @return boolean
     */
    public function is_login()
    {
        if (isset($_SESSION['login_data'])) {
            return true;
        } else {
            return false;
        }
    }

    /**
      * make the user offine
      *
      * @param integer $user_id
      * @return void
      */
    public function make_user_offline(int $user_id)
    {
        $this->update_user_account($user_id, [
             'is_online' => 0
         ]);
    }

    /**
     * make the user online
     *
     * @param integer $user_id
     * @return void
     */
    public function make_user_online(int $user_id)
    {
        $this->update_user_account($user_id, [
             'is_online' => 1
         ]);
    }

    /**
      * make_user_inactive
      *
      * @param integer $user_id
      * @return void
      */
    public function make_user_inactive(int $user_id)
    {
        $this->update_user_account($user_id, [
             'is_active' => 0
         ]);
    }

    /**
     * make_user_active
     *
     * @param integer $user_id
     * @return void
     */
    public function make_user_active(int $user_id)
    {
        $this->update_user_account($user_id, [
             'is_active' => 1
         ]);
    }
}
