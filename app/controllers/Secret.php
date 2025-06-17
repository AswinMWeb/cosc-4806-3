<?php
class Secret extends Controller {
    public function __construct() {
        parent::__construct();
        

        // If the user isn’t logged in, send them to /login
        if (empty($_SESSION['user_id'])) {
            $this->redirect('/login');
        }
    }

    public function index() {
        // Render the protected secret page
        $this->view('secret/index');
    }
}
