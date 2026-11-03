<?php
$pacientes = [];
$sintomas = [
    "Febre alta",
    "Pele pálida",
    "Comportamento agressivo",
    "Ausência de batimentos cardíacos",
    "Desejo de comer cérebro"
];

$zumbiconfirmado = 0;
$maior_pontuacao = -1;
$paciente_maior_pontuacao = "";

// 1. Cadastro dos 5 pacientes
for ($i = 1; $i <= 5; $i++) {
    $nomedopaciente = readline("Digite o nome do paciente {$i}:\n");
    $pacientes[] = $nomedopaciente;
}

echo "\n--- INICIANDO TRIAGEM DOS SINTOMAS ---\n";

$resultados = [];

// 2. Coleta de sintomas e cálculo da pontuação individual
foreach ($pacientes as $paciente) {
    $pontosdeinfeccao = 0; // Reseta a pontuação para cada paciente individualmente

    foreach ($sintomas as $sint) {
        $resposta = trim(readline("O paciente {$paciente} tem o sintoma '{$sint}'? (Sim ou Nao): "));
        
        // Se a resposta for Sim (ignorando maiúsculas/minúsculas), soma 1 ponto
        if (strcasecmp($resposta, "Sim") == 0) {
            $pontosdeinfeccao++;
        }
    }

    // 3. Classificação individual de acordo com os critérios
    if ($pontosdeinfeccao <= 1) {
        $classificacao = "Humano saudável";
    } elseif ($pontosdeinfeccao >= 2 && $pontosdeinfeccao <= 3) {
        $classificacao = "Suspeita de infecção";
    } elseif ($pontosdeinfeccao == 4) {
        $classificacao = "Infectado em estágio avançado";
    } else {
        $classificacao = "Zumbi confirmado";
        $zumbiconfirmado++;
    }

    // Guarda os dados para exibir depois
    $resultados[] = [
        "nome" => $paciente,
        "pontuacao" => $pontosdeinfeccao,
        "classificacao" => $classificacao
    ];

    // 5. Identificar a maior pontuação
    if ($pontosdeinfeccao > $maior_pontuacao) {
        $maior_pontuacao = $pontosdeinfeccao;
        $paciente_maior_pontuacao = $paciente;
    }
}

// 4. Exibição dos resultados de cada paciente
echo "\n========================================\n";
echo "       RESULTADOS DA TRIAGEM MÉDICA     \n";
echo "========================================\n";

foreach ($resultados as $res) {
    echo "Paciente:      " . $res["nome"] . "\n";
    echo "Pontuação:     " . $res["pontuacao"] . " ponto(s)\n";
    echo "Classificação: " . $res["classificacao"] . "\n";
    echo "----------------------------------------\n";
}

// Exibição das estatísticas finais
echo "\n[Estatística] A quantidade de zumbis confirmados é: {$zumbiconfirmado}\n";
echo "[Destaque] O paciente com a maior pontuação é: {$paciente_maior_pontuacao} ({$maior_pontuacao} pontos)\n";

// 6. Alerta final de surto
echo "\n========================================\n";
if ($zumbiconfirmado >= 2) {
    echo "  🚨 ALERTA: RISCO DE SURTO ZUMBI! 🚨\n";
} else {
    echo "  ✅ SITUAÇÃO SOB CONTROLE.\n";
}
echo "========================================\n";
?>