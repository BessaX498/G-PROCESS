<?php
	class db
	{
		//Variáveis
		public $host = '127.0.0.1';
		public $user = 'root';
		public $senha = '';
		public $db = 'maindb';

		//Conexão
		public function conecta_mysql(){
			//Conexão
			$con = mysqli_connect($this->host, $this->user, $this->senha, $this->db);

			//Ajustar para UTF8
			mysqli_set_charset($con, 'utf8');

			//Verificar se Houve um erro
			if(mysqli_connect_errno()){
				echo "Erro ao tentar se comunicar com o banco de dados: ".mysqli_connect_error();
			}
			return $con;
		}

		//Método inserir
		public function insert($object)
		{
			$link = $this->conecta_mysql();
			$tabela = get_class($object);
			$atributos = array_keys(get_object_vars($object));
			$values = array_values(get_object_vars($object));
			$campos = null;
			$valores = null;
			$condicoes = null;
			$qtd_atributos = sizeof($atributos);
			for ($i=0; $i<$qtd_atributos; $i++) {
				if ( @ $values[$i] ) {
					if ( $campos ) $campos .= ",";
					$campos .= $atributos[$i];
					
					if ( $valores ) $valores .= ",";
					$valores .= "'".$values[$i]."'";
					
					if ($condicoes) $condicoes .= " and ";
					$condicoes .= $atributos[$i]."='".$values[$i]."'";
				}
			}

			$sql = "INSERT INTO $tabela ($campos) VALUES ($valores)";
			
			if (mysqli_query($link, $sql)) {
				echo "O usuário adcionado com Sucesso";
			}else{
				echo "O usuário não foi cadastrado com Sucesso";
			}
		}
		//Método de Busca
		public function query($colunas, $tabela, $condicao){
			$link = $this->conecta_mysql();
			$sql = "SELECT $colunas FROM $tabela $condicao;";
			$resultado_id = mysqli_query($link, $sql);
			return $resultado_id;
		}
		
		//Método de Update
		public function update($edicao, $tabela, $condicao){
			$link = $this->conecta_mysql();
			$sql = "UPDATE $tabela set $edicao $condicao";
			
		}

		//Método Delete
		public function delete($tabela, $condicao){
			$link = $this->conecta_mysql();
			$sql = "DELETE FROM $tabela $condicao";
			if(mysqli_query($link, $sql)){
				echo "Deletado com Sucesso";
			}else{
				echo "Ocorreu um erro ao Deletar";
			}
		}
	}
?>