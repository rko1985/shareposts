<?php 

class Pages extends Controller{
    public function __construct(){
        
    }

    public function index(){
        

        $data = [
            'title' => 'Shareposts',
            'description' => 'Simple social network built on the Simple PHP MVC framework'
        ];

        

        $this->view('pages/index', $data );
    }

    public function about(){

        $data = [
            'title' => 'About Us',
            'description' => 'App to share posts to other users.'
        ];
        $this->view('pages/about', $data);
    }
}

?>