<?php
$candidatos=["Candidata Ana", "Candidato João", "Voto em branco"
];
$candidatos[0]=1;
$candidatos[1]=2;
$candidatos[2]=3;

$votosana=0;
$votosjoao=0;
$votosbranco=0;




echo"Candidatos:\n 1 – Candidata Ana\n 2 – Candidato João\n 3 – Voto em branco\n";


for($i=1;$i<=10;$i++){
    $eleitor=(int)readline("Digite o seu voto:\n");
    if($eleitor!=1 and $eleitor!=2 and $eleitor!=3){
        echo"Voto inválido!\n";
        $eleitor=(int)readline("Digite o seu voto:\n");
    }
    if($eleitor==1){
       $votosana++;
    }
    elseif($eleitor==2){
        $votosjoao++;
    }
    elseif($eleitor==3){
        $votosbranco++;
    }
}
$vencedor="";

if($votosana>$votosjoao and $votosana>$votosbranco){
    $vencedor="Candidata Ana";
}
elseif($votosjoao>$votosana and $votosjoao>$votosbranco){
    $vencedor="Candidato João";
}
elseif($votosbranco>$votosana and $votosbranco>$votosjoao){
    $vencedor="Sem vencedor(Maioria voto em branco)";
}
elseif($votosana==$votosjoao and $votosana>$votosbranco){
    $vencedor="Empate entre Candidato Ana e Candidato João";
}
elseif($votosana==$votosbranco and $votosana>$votosjoao){
    $vencedor="Empate entre Ana e votos em branco";
}
else($vencedor="Empate entre João e votos em branco");



echo"A quantidade de votos do Candidato Ana foi:$votosana\n";
echo"A quantidade de votos do Candidato João foi:$votosjoao\n";
echo"A quantidade de votos em branco foi:$votosbranco\n";


echo"O vencedor foi:$vencedor";









?>