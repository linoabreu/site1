<?php

function validaNome(string $nome) : boot
{
	if(empty($nome))
	{
		setarMensagemErro('O nome não pode ser vazio');
		return false;
    }
	else if(strlen($nome) < 3)
	{
		setarMensagemErro('O nome não pode ter menos de 3 letras');
		return false;
	}
	else if(strlen($nome) > 40)
	{
		setarMensagemErro('O nome é muito extenso');
		return false;
	}
	return true;
}	

function validaIdade(string $idade): boot
{
	if(!is_numeric($idade))
	{
		setarMensagemErro('Informe um número para a idade');
		return false;
	}
	return true;
}
