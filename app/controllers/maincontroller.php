<?php

class MainController extends Controller{

    function main(){

        $users = new Users($this->db);
        $user = $users->all();

        $this->f3->set('user',$user);

        $template=new Template;
        echo $template->render('home.html');
    }

}