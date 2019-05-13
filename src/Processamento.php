<?php 

namespace Gru;


/**
* 
*/
class Processamento 
{
	
	protected $linha;

	private $pagamento;

	public function __construct($linha)
	{
		$this->linha = $linha;
		$this->pagamento = new Pagamento();
	}

	public function pagamento()
	{
		$this->setUnidadeGestora();
		$this->setRegistro();
		$this->setdataPagamento();
		$this->setValor();
		$this->setCpf();
		$this->setIndentificador();
		return $this->pagamento;
	}

	protected function setUnidadeGestora()
	{
		if(strlen($this->linha) == 6){
			$this->pagamento->unidade_gestora = $this->linha;
		}
	}

	protected function setRegistro()
	{
		if(strlen($this->linha) > 6){
			$this->pagamento->registro = substr($this->linha,0,9);
		}
	}

	protected function setdataPagamento()
	{
		if(strlen($this->linha) > 6){
			$data = substr($this->linha,101,8);
			$this->pagamento->data = $data;
		}
	}

	protected function setValor()
	{
		if(strlen($this->linha) > 6){
			$data = substr($this->linha,122,4);
			$this->pagamento->valor = $data;
		}	
	}

	protected function setCpf()
	{
		if(strlen($this->linha) > 6){
			$data = substr($this->linha,256,11);
			$this->pagamento->cpf = $data;
		}	
	}

	protected function setIndentificador()
	{
		if(strlen($this->linha) > 6){
			$data = substr($this->linha, 90,11);
			$this->pagamento->identificador = $data;
		}
	}

}
