<!DOCTYPE html>
<html>
	<body>
	<?php
        $t = "Testes";
        $w = "Posso declarar";
        $x = 27;
        $y = 5;
        $f = "Maio";       
			echo "<h2>Utilizando o ECHO</h2>";
            
			echo "Olá Brsail<br>";
			echo "Eu vou aprender tudo sobre PHP<br>";
			echo "Este ", "texto ", "foi ", "feito ", "com diversos parâmetros . <br>";
            //Que parametros seriam??, os que seriam encaixados entre as vírgulas, por exemplo:
            echo "Este ", $y-$x , " texto ", $x/$y , " foi ", "feito ", "com diversos parâmetros, separado por vírgulas, assim posso adicionar o tratamento de informações ", $x*$y , ". <br>";
            echo "Continuando com os ", $t , " eu ", $w , " minha variaveis e utilizá-las dentro o Echo tranquilamente. <br> Dia ", $x , " de ", $f , " diversas partes desse texto são variáveis";
            //Com o print e println não muda muita coisa, somente acrescenta alguma funcionalidades, porém o princípio é o mesmo, mostrar o resultado na tela. (Acostumar a utilizar o print, pois é utilizado em diversas linguagens.
            
            
            print "<h2>Utilizando o PRINT</h2>";
            
			print "Olá Brsail<br>";
			print "Eu vou aprender tudo sobre PHP<br>";
            print "Este "."texto "."foi ". "feito ". "com diversos parâmetros . <br>";
            //Que parametros seriam??, fiferente do echo, seriam os encaixados entre os pontos, por exemplo:
            print "Este ". $y-$x . " texto ". $x/$y . " foi ". "feito ". "com diversos parâmetros, separado por vírgulas, assim posso adicionar o tratamento de informações ". $x*$y . ". <br>";
            print "Continuando com os ". $t . " eu ". $w . " minha variaveis e utilizá-las dentro o Echo tranquilamente. <br> Dia ". $x . " de ". $f . " diversas partes desse texto são variáveis <br>";
            //Com o print e println não muda muita coisa, somente acrescenta alguma funcionalidades, porém o princípio é o mesmo, mostrar o resultado na tela.
		?>
        
        
        <?php       
        	print "<h2>Tipos de Variáveis</h2>";
            
            $a = "Texto"; // string
			$b = 5985; // int
            $c = 10.365; // float
            $d = true; // bool
            $e = false; // bool
            $f = array("Técnico","Programador","Analista",8,true); // array
            
            var_dump($a);
			print "<br>Tipo Texto<br>";
			var_dump($b);
			print "<br>Tipo numero inteiro<br>";
            var_dump($c);
			print "<br>Tipo numero fracionário, com vírgula, quebrado<br>";
            var_dump($d);var_dump($e);
			print "<br>Tipo valor booleano, condicional, verdadiro ou falso<br>";
            var_dump($f);
			print "<br>Tipo Arranjo, posso por diversas valores dentro dela, pode armazenar todos os tipos de varáveis<br>";
        ?> 
        <?php
        	$x = "Hello world!"; // Atribuindo um valor a uma variável
			$x = null;  // Limpando os valores atribuidos à variável
			var_dump($x);
            print "<br>Desta forma por mais que vc atribua um valor para a variável, o valor será Nulo(NULL)<br>";
        ?>
        
        
        <?php
        
        print "<h2>Orientação a Objeto, Classes</h2>";
        
           	class Funcionario { // Declarei aqui a Minha classe de Funcionários
               	public $cargo; 
               	public $nome;
               		public function __construct($cargo, $nome) { // Função criada para ser utilizada com a classe 
                   		$this->cargo = $cargo;
        	           	$this->nome = $nome;
                   	}
                   	public function message() {
                    	return "Meu funcionário no cargo de " . $this->cargo . ", é o " . $this->nome . "!";
                   	}
             }
             // Para poder receber os resultados corretos, tenho que declarar a variável com my + o nome da classe que eu quero puxar as funções $myFuncionarios
             $myFuncionario = new funcionario("Proramador", "Thiago");
             echo $myFuncionario -> message();
             echo "<br>";
             $myFuncionario = new funcionario("TI", "Junior");
             echo $myFuncionario -> message();
             ?>


			<?php
            	print "<h2>Contador de Caracteres</h2>";
                
				echo strlen("Olá novo mundo!"); // Deverá informar 16
			?>
            
            <?php
           		print "<h2>Contador de Palavras</h2>";
                
				echo str_word_count("Olá novo mundo!"); // Deverá informar 3
			?>
            
            <?php
            	print "<h2>Invertendo a ordem das letras</h2>";
                
				echo strrev("Hello world!"); // outputs !dlrow olleH
			?>
            
            <?php
            	print "<h2>Substituir palavras dentro do texto</h2>";
                
				echo str_replace("world", "Dolly", "Hello world!"); // Deverá informar Hello Dolly!
			?>
            
            <?php            
            print "<h2>Verificar se um número é inteiro, fracionario</h2>";
            
				$x = 5985;
				echo $x . var_dump(is_int($x));
                echo "<br>";
				$x = 59.85;
				echo $x . var_dump(is_int($x));
                echo "<br>";
                $x = 10.365;
				echo $x . var_dump(is_float($x)) . "<br>";
			?>	
            
            <?php
			print "<h2>Verificando se a variável é um numero</h2>";    
			$x = 5985;
			echo $x . var_dump(is_numeric($x));

			echo "<br>";

			$x = "5985";
			echo $x . var_dump(is_numeric($x));

			echo "<br>";

			$x = "59.85" + 100;
			echo $x . var_dump(is_numeric($x));

			echo "<br>";

			$x = "Hello";
			echo $x . var_dump(is_numeric($x));
			?>  
            
      <?php
			  print "<h2>Convertendo de Float para Integer</h2>"; 
			    $x = 23465.768;
			    $int_cast = (int)$x;
			  echo $int_cast;

			  echo "<br>";

			   print "<h2>Convertendo de String para Integer</h2>"; 
			     $x = "23465.768";
			      $int_cast = (int)$x;
			   echo $int_cast;
      ?>
      <?php         
       		 print "<h2>Funções</h2>";
		//Variaveis Globais e Locais, servem para todo o código.
		$x = 5; // global scope 
			function teste() {
				$x = 10; //Local scope
				// *Variavéis Locais - Porém, se eu declara uma váriavel dentro da função, ela será a padrão a ser utilizada.
				echo "<p>Variável x tem como valor de saída, o valor Local: $x</p>";
			} 
			teste();
			echo "<p>Variável x tem como valor de saída, o valor Global: $x</p>";
		?>
 		<?php
		$x = 50;
		$y = 100;
			function teste2() {
				global $x, $y; //Puxando a variáveis globais
				$y = $x + $y;
			}
			teste2();
			echo "$y</p>"; // A saída deverá ser 150
		?>
		<?php
		$x = 300;
		$y = 1000;
		//Puxando as variáveis globais diretamente na operação
			function teste3() {
				$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
			}
			teste3();
			echo "$y</p>"; // A saída deverá ser 1500
		?>
        <?php
        	teste();
			echo "$y</p>";	//Da forma que coloquei puxa os ultimos valores atribuidos as variáveis.		
            teste2();
			echo "$y</p>";
            teste3();
            echo "$y</p>";
        ?>
		<?php
			function myTest() {
				static $x = 0;
				echo $x;
				$x++;
			}
			myTest();
			myTest();
			myTest();
		?>
	</body>
</html>
