<?php
    class Controller {
<<<<<<< HEAD

=======

>>>>>>> lethe/master
        protected $f3;
        protected $db;
        protected $audit;

<<<<<<< HEAD
        function beforeroute() {
=======
        function beforeroute() {
>>>>>>> lethe/master
        }

        function afterroute() {
            if ($this->audit->isMobile()) {
                $this->f3->set('isMobile', true);
            }
            echo Template::instance()->render('layout.html');
        }

        function __construct() {

            $f3=Base::instance();

            $db=new DB\SQL(
                $f3->get('db_dns') . $f3->get('db_name'),
                $f3->get('db_user'),
                $f3->get('db_pass')
            );

            $audit = \Audit::instance();

            $this->f3=$f3;
            $this->db=$db;
            $this->audit=$audit;
        }
    }
?>
