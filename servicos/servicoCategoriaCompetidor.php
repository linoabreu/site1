<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
	$categorias = [];
	$categorias = 'infantil';
	$categorias = 'adolescente';
	$categorias = 'adulto';

	if(is_array($categorias) && count($categorias) > 0)
	{
		if(validaNome($nome) && validaIdade($idade))
		{
			if($idade >= 6 && $idade <=12)
			{
					for($i = 0; $i <= count($categorias); $i++)
					{
						if ($categorias[$i] == 'infantil') 
							setarMensagemSucesso("O nadador ".$nome." compete na categoria" .$categorias[$i]);
							return null;
					}
				}
				else if ($idade >= 13 && $idade  <= 18)
				{
				 	for($i = 0; $i <= count($categorias); $i++)
				 	{
				 		if($categorias[$i] == 'adolescente')
				 			setarMensagemSucesso("O nadador ".$nome. " compete na categoria adolescente");
				 			return null;
				 	}
				}
				else
				{
				 	for($i = 0; $i <= count($categorias); $i++)
				 	{
				 		if ($categorias[$i] == 'adulto')
				 			setarMensagemSucesso("O nadador ".$nome. "compete na categoria adulto");
				 			return null;
				 	}
				}				

			}
		}
		else
		{
			return obterMensagemErro();
		}
	else
	{

	         //CASO QUEIRA MOSTRAR UM AVISO OU OUTRA COISA SE ELE NÃO TIVER DADOS...
	}
}   
