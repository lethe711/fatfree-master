<?php
    class UserController extends Controller {
 
        public function index() {
            $user = new User($this->db);
            $this->f3->set('users',$user->all());
            $this->f3->set('page_head','User List');        
            $this->f3->set('view','user/list.html');
        }
        
        /*
        * Create user function
        * POST request: create user
        * GET request: render form
        */
        public function create() {
            /*
            * check if POST request has create field
            * if yes, add user and return home
            */
            if($this->f3->exists('POST.create')) {
                $user = new User($this->db);
                $user->add();

                $this->f3->reroute('/');
            } 
            /*
            * otherwise, render request as a form to input user
            */
            else {
                $this->f3->set('page_head','Create User');
                $this->f3->set('view','user/create.html');
            }
        }
        
        /*
        * Update user function
        * POST request: update user information
        * GET request: render form
        */
        public function update() {
            $user = new User($this->db);
            /*
            * check if POST request has create field
            * if yes, add user and return home
            */
            if($this->f3->exists('POST.update')) {
                $user->edit($this->f3->get('POST.id'));
                $this->f3->reroute('/');
            }
            /*
            * otherwise, render request as a form to input user
            */
            else {
                $user->getById($this->f3->get('PARAMS.id'));
                $this->f3->set('user',$user);
                $this->f3->set('page_head','Update User');
                $this->f3->set('view','user/update.html');
            }
        }
        
        /*
        * Delete user function
        * GET only
        */
        public function delete() {
            
            if($this->f3->exists('PARAMS.id')) {
                $user = new User($this->db);
                $user->delete($this->f3->get('PARAMS.id'));
            }
            
            // go back to home page after delete
            $this->f3->reroute('/');
        }
    }
?>