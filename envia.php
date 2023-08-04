<?php 
 
 //print_r($_FILES['arquivo']); //"arquivo" foi o NAME que a gente definiu no input, que é a parte que seleciona um arquivo.

 $nomedoArquivo = $_FILES['arquivo']['name'];//aqui esta dizendo que eu quero pegar o nome do arquivo.
 $caminhoAtualArquivo = $_FILES['arquivo']['tmp_name'];//aqui pegamos o caminho atual do arquivo.
 $caminhoSalvar = 'arquivos/' .$nomedoArquivo;  //aqui vamos mostrar na onde vai ser salvo quando o usuario salvar //"$nomedoArquivo" - temos que dar um nome ao arquivo.



 if(move_uploaded_file($caminhoAtualArquivo, $caminhoSalvar)){//aqui só precisamos passar dois caminhos, o caminho atual e aonde queremos salvar o aquivo;
    header("Location: home.php");//isso fará com que o arquivo seja enviado para esta pagina.
 }
 else {
    echo "Arquivo não carregado";
 }
 



?>