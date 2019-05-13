<?php 
require_once "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use Gru\Processamento;

/**
* 
*/
class ProcessamentoTest extends TestCase
{
	
	public function testUnidadeGestora()
	{
		$processamento = new Processamento('158150');
		$pagamento = $processamento->pagamento();
		$this->assertEquals($pagamento->unidade_gestora, '158150');

	}


	public function testData()
	{
		$processamento = new Processamento('7777777777720161018I2016101715815026426215815026426289001810201600000000000095523000000000071200002911410201600000000000002000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000002000001001043311201614102016100051515151500000000000000000001E514F872F46D09C4');
		$pagamento = $processamento->pagamento();
		$this->assertEquals($pagamento->registro, '777777777');
		$this->assertEquals($pagamento->data, '14102016');
		$this->assertEquals($pagamento->valor, '2000');
		$this->assertEquals($pagamento->cpf, '515151515');

	}

	
}