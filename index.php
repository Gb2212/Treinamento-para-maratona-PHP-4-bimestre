<?php
$candidatos=[];
for($i=0;$i<=5;$i++){
$nomecandidato=readline("Digite o nome do candidato:\n");
$candidatos[]=$nomecandidato;
}


$candidatosaptos=0;



foreach($candidatos as $contador){
    $pontuacao=(int)readline("Digite a pontuaçao do candidato {$contador}:\n");

    if($pontuacao>=0 and $pontuacao<=49){
        echo"Não apto.\n";
        echo"Pontuação:$pontuacao\n";
    }
    elseif($pontuacao>=50 and $pontuacao<=79){
        echo"Em treinamento.\n";
        echo"Pontuação:$pontuacao\n";
    }
    else{
        echo"Apto para missão\n";
        echo"Pontuação:$pontuacao\n";
        $candidatosaptos++;
}
}
echo"Candidatos aptos para missão:$candidatosaptos";

if($candidatosaptos>=2){
    echo"MISSÃO AUTORIZADA!";
}

else{echo"MISSÃO CANCELADA!";}


?>