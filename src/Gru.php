<?php  

namespace Gru;

/**
* 
*/
class Gru 
{	

	public $path;
	
	public function __construct($path)
	{
		$this->path = $path;
	}


	public function getFille()
	{
		return fopen($this->path, "r");
	}

	public function ler()
	{
		$processamentos = [];
		$handle = $this->getFille();
		if ($handle) {
		    while (($linha = fgets($handle)) !== false) {
 		         $p =  new Processamento($linha);
 		         $processamentos [] = $p->pagamento();
		    }
		    fclose($handle);
		} 
		return $processamentos;
	}

}