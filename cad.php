<?php
//Escreva um programa que pergunte o dia, mês e ano do aniversário de uma
//pessoa e diga se a data é válida ou não. Caso não seja, diga o motivo.
//Suponha que todos os meses têm 31 dias e que estejamos no ano de 2000.
//Caso a data esteja correta imprima “Data válida”

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Receber os dados do formulário
    $dia = (int) $_POST['dia'];
    $mes = (int) $_POST['mes'];
    $ano = (int) $_POST['ano'];

    // Validar os dados ( posso adicionar mais validações se necessário)
    if ($mes < 1 || $mes > 12) {
        echo "Mês inválido. O mês deve estar entre 1 e 12.<br>";
    } elseif ($dia < 1 || $dia > 31) {
        echo "Dia inválido. O dia deve estar entre 1 e 31.<br>";
    } elseif ($ano < 1900 || $ano > 2100) {
        echo "Ano inválido. O ano deve estar entre 1900 e 2100.<br>";
    } else {
        echo "Data de nascimento: $dia/$mes/$ano<br>";
    }
} else {
// Função para verificar se o dia é válido
function verificarData($dia, $mes, $ano) {
    // Verifica se o mês está entre 1 e 12
    if ($mes < 1 || $mes > 12) {
        return "Mês inválido. O mês deve estar entre 1 e 12.";
    }

    // Verifica se o dia está entre 1 e 31, pois todos os meses têm 31 dias (uma a suposição)
    if ($dia < 1 || $dia > 31) {
        return "Dia inválido. O dia deve estar entre 1 e 31.";
    }

    // Verifica se o ano é 2000 (um a suposição)
    if ($ano != 2000) {
        return "Ano inválido. O ano deve ser 2000.";
    }

    // Se passou por todas as verificações, a data é válida
    return "Data válida";
}

// Perguntar ao usuário o dia, mês e ano de nascimento
$dia = (int) readline("Digite o dia do seu aniversário: ");
$mes = (int) readline("Digite o mês do seu aniversário: ");
$ano = (int) readline("Digite o ano do seu aniversário: ");

// Verificar se a data fornecida é válida
$resultado = verificarData($dia, $mes, $ano);

// Mostra o resultado
echo $resultado;
}
?>