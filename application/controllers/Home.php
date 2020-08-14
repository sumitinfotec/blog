<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

public function index()
{


$data['main'] = 'home_view';
$this->load->view('layouts/main_view',$data);

}

public function photography()
{
    $data['main'] = 'photography_view';
$this->load->view('layouts/main_view',$data);
}

public function travelogue()
{
    $data['main'] = 'travelogue_view';
$this->load->view('layouts/main_view',$data);
}

public function videos()
{
    $data['main'] = 'videos_view';
$this->load->view('layouts/main_view',$data);
}

public function archives()
{
    $data['main'] = 'archives_view';
$this->load->view('layouts/main_view',$data);
}

public function contact()
{
    $data['main'] = 'contact_view';
$this->load->view('layouts/main_view',$data);
}

public function login()
{
   
$this->load->view('admin/index');
}

public function creative()
{
    
$this->load->view('admin/creative-writing');
}

public function education()
{
    
$this->load->view('admin/educational-writing');
}

public function view_posts()
{
    
$this->load->view('admin/view_posts');
}

public function post_detail()
{
    
$this->load->view('admin/post_detail');
}

public function post_edit()
{
    
$this->load->view('admin/edit_post');
}

}

?>