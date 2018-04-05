<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->driver('cache');

        $valor = $this->cache->file->get('onlineService');
        $expire_time = 60 * 60 * 24;
        if (!$valor) {
            $valor = 1;
            $this->cache->file->save('onlineService', $valor, $expire_time);
        } else {
            $valor++;
            $this->cache->file->save('onlineService', $valor, $expire_time);
        }
        $data['valor'] = $valor;
        $data['title'] = 'PRIVILÉGIO SOLARIS';
        $data['description'] = 'Aproveite esta oportunidade';
        $data['keywords'] = 'privilegio sao vicente, apartamento sao vicente, imoveis sao vicente, promocao imovel sao vicente, residencial sao vicente';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }

}

/* Location: ./application/controllers/home.php */
