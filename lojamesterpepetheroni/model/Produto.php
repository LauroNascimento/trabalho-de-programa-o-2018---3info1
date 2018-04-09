<?php

class Produto
{
		private $id;
		private $nome;
		private $descricao;
		private $foto;
		private $preco;
		private $categoria;

   
		public function setNome($nome)
    {
	$this->nome = $nome;
    }

    	public function setId($id)
    {
	$this->id = $id;
    }

		public function setDescricao($descricao)
    {
	$this->descricao = $descricao;
    }

		public function setCategoria($categoria)
    {
	$this->categoria = $categoria;
    }

		public function setFoto($foto)
    {
	$this->foto = $foto;
    }

		public function setPreco($preco)
    {
	$this->preco = $preco;
    }


}
