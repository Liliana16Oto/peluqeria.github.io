<?php

class Menus extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    //renderizar las vistas
  }
    public function vision()
  {
    $this->load->view('header');
    $this->load->view('menus/vision');
    $this->load->view('footer');
  }
    public function caballero()
    {
      $this->load->view('header');
      $this->load->view('menus/caballero');
      $this->load->view('footer');
    }
    public function dama()
    {
    $this->load->view('header');
    $this->load->view('menus/dama');
    $this->load->view('footer');
    }
    public function maquillaje()
    {
    $this->load->view('header');
    $this->load->view('menus/maquillaje');
    $this->load->view('footer');
    }
}

 ?>
