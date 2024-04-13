<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta 
    <title>vetores e repetição</title>
</head>
<body>
   
   <?php
   $vetorA = array("ADS", "CD", "ADS", "ADS", "CD", "CD", "ADS");
   $vetorB = array(
    "Nome" => "Pedro",
    "Idade" => 30,
    "Curso" => "ADS",
    "Média" => 7.0
   );
   ?>

   <?php
   echo '<table border="1">';
   foreach($dados as $linha){
     echo '<tr>';
     foreach($linha as $v){
       echo "<td>$v</td>";
     }
     echo '</tr>';
   }
   echo '</table>';
$alunos = array(
    array("Nome" => "Maria", "Curso" => "ADS", "Média" => 7.0, "Situação" => ""),
    array("Nome" => "João", "Curso" => "CD", "Média" => 5, "Situação" => ""),
    array("Nome" => "José", "Curso" => "CD", "Média" => 8.0, "Situação" => ""),
    array("Nome" => "Pedro", "Curso" => "ADS", "Média" => 1.5, "Situação" => ""),
    array("Nome" => "Paulo", "Curso" => "ADS", "Média" => 6.0, "Situação" => "")
);
foreach ($alunos as &$aluno) {
    if ($aluno["Média"] < 2) {
        $aluno["Situação"] = "Reprovado";
    } elseif ($aluno["Média"] >= 2 && $aluno["Média"] < 6) {
        $aluno["Situação"] = "Exame Final";
    } else {
        $aluno["Situação"] = "Aprovado";
    }
}
echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Curso</th><th>Média</th><th>Situação</th></tr>";
foreach ($alunos as $aluno) {
    echo "<tr><td>{$aluno['Nome']}</td><td>{$aluno['Curso']}</td><td>{$aluno['Média']}</td><td>{$aluno['Situação']}</td></tr>";
}
echo "</table>";
$cursos = array("ADS" => array("Aprovado" => 0, "Exame Final" => 0, "Reprovado" => 0), "CD" => array("Aprovado" => 0, "Exame Final" => 0, "Reprovado" => 0));
foreach ($alunos as $aluno) {
    $cursos[$aluno["Curso"]][$aluno["Situação"]]++;
}
foreach ($cursos as $curso => $situacoes) {
    echo "<h1>$curso:</h1>";
    echo "- Aprovado: {$situacoes['Aprovado']}<br>";
    echo "- Exame Final: {$situacoes['Exame Final']}<br>";
    echo "- Reprovado: {$situacoes['Reprovado']}<br>";
}
   ?>
</body>
</html>