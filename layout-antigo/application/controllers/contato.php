<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}
	public function index(){
        $data['title'] = 'PRIVILÉGIO SOLARIS';
		$data['description'] = 'Aproveite esta oportunidade';
		$data['keywords'] = 'privilegio sao vicente, apartamento sao vicente, imoveis sao vicente, promocao imovel sao vicente, residencial sao vicente';
		$menu['contato'] = 'active';
		$conteudo['pagina_view'] = 'contato_view';
		
		if($this->input->post('enviar_email') == "enviar"){			
			$nome = $this->input->post('nome');
			$email = $this->input->post('email');
			$telefone = $this->input->post('phone');
			$mensagem = utf8_decode($this->input->post('mss'));
			$assunto = utf8_decode('Contato enviado pelo site www.privilegiosolaris.com.br');
			
			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			
			$this->email->from("$email","$nome"); //senha: privileg2017
			$this->email->to("beta@privilegiosolaris.com.br, paulobaronista@gmail.com");
			//$this->email->cc('paulobaronista@gmail.com');
			$this->email->subject($assunto);
			$this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
			<head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
				Nome:		{$nome}<br/>
				E-mail:		{$email}<br/>
				Telefone:	{$telefone}<br/>
				Mensagem:	{$mensagem}<br/>
			</body></html>");
			
			if($this->email->send()){				
				redirect('http://privilegiosolaris.com.br/contato/obrigado');
			}else{
				redirect('http://privilegiosolaris.com.br/contato/fail');
			}
			
		}
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}

	public function obrigado(){	
		$data['title'] = 'PRIVILÉGIO SOLARIS';
		$data['description'] = 'Aproveite esta oportunidade';
		$data['keywords'] = 'privilegio sao vicente, apartamento sao vicente, imoveis sao vicente, promocao imovel sao vicente, residencial sao vicente';
		$menu['contato'] = 'active';
		$conteudo['pagina_view'] = 'contato_sucesso';
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	
	public function fail(){	
		$data['title'] = 'PRIVILÉGIO SOLARIS';
		$data['description'] = 'Aproveite esta oportunidade';
		$data['keywords'] = 'privilegio sao vicente, apartamento sao vicente, imoveis sao vicente, promocao imovel sao vicente, residencial sao vicente';
		$menu['contato'] = 'active';
		$conteudo['pagina_view'] = 'contato_insucesso';
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	
}

/* Location: ./application/controllers/contato.php */