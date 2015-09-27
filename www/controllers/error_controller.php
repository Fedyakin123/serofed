<?php

class error_controller extends controller
{
    public function page_not_found()
    {
        $this->view('404');
    }
    public function not_user()
    {
        $this->view('not_user');
    }
}