[![Build Status](https://travis-ci.org/Edilton/Gru.svg?branch=master)](https://travis-ci.org/IFAP/Gru)

# Gru
Lê um arquivo txt enviado pelo SIAFI


## Uso

*Instalação*


`$ composer require ifap/gru dev-master`


*Lendo o arquivo*


```php 
  $gru = new Gru('/caminhoabsolutodoarquivo/arquivo.txt');`
  $pagamentos = $gru->ler();
 ```


*Exemplo de Retorno*


 ```php
  1 => Pagamento {#417 ▼
      +unidade_gestora: null
      +registro: "777777777"
      +conta: null
      +cpf: "23683467088"
      +valor: "2000"
      +data: "14102016"
      +identificador: null
  }

  ```

