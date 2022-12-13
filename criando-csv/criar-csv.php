<?php
$pessoas = [
    ["Nome","Idade","Cidade"],
    ["Claudine",24,"Americana"],
    ["Bárbara",26,"Sumaré"]
];

// echo "<pre>";
// print_r ($pessoas);
// echo "</pre>";
$arquivo = fopen("dados.csv", "a+");

foreach($pessoas as $umaPessoa){
    fputcsv($arquivo, $umaPessoa, ";");
}

fclose($arquivo);

?>