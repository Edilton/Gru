<?php 
require_once "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use Gru\Gru;
use Gru\Pagamento;

/**
* 
*/
class LerArquivoTest extends TestCase
{
	public $gru;

	public function __construct()
	{
		parent::__construct();
		$this->gru = new Gru(getcwd().'/tests/arrecadacao.txt');

	}
	/**
	 * @test
	 */
	public function testGetFile()
	{
		$handle =$this->gru->getFille();
        $this->assertNotNull($handle);

	}


	public function testLeitura()
	{
		$this->assertContainsOnlyInstancesOf('Gru\Pagamento', $this->gru->ler());
	}


	public function testQuantidadeLinhas()
	{
		$this->assertEquals(count(file($this->gru->path)), count($this->gru->ler()));
	}
}