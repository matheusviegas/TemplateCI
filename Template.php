<?php if ( ! defined('BASEPATH')) exit('Acesso direto a este arquivo não é permitido.');

class Template {
		protected $CI;
		protected $template;

        public function __construct(){
            $this->CI =& get_instance();
            $this->template = $this->CI->config->item('template_padrao');
        }

		var $dados_template = array();
		
		function definirVariaveis($nome, $valor)	{
			$this->dados_template[$nome] = $valor;
		}

		function mudaTemplate($template){
			$this->template = $template;
		}
	
		function load($view = '' , $dados_view = array(), $retornar = FALSE){               
			$this->definirVariaveis('conteudo', $this->CI->load->view($view, $dados_view, TRUE));			
			return $this->CI->load->view($this->template, $this->dados_template, $retornar);
		}
}
