<?php 
 
  $pasta = "arquivos/";
  $diretorio = dir($pasta);//variavel diretória para a gente saber qual é o diretório do nosso arquivo. Passamos a pasta que queremos ler.

  while($arquivo = $diretorio->read()){//enquanto ouver um arquivo, ele ira listar para nós. Dentro do READ() ela vai ficar lendo todas as informçoes que estão sendo passadas 
    if($arquivo != '.' && $arquivo != '..'){//no navegador aparece pontos(.) do arquivo, então isso faz com que eles sumam.
      echo "<a href='".$pasta.$arquivo."'><br><img src='" . $pasta.$arquivo. "' width='100'> ".$pasta.$arquivo." </a><br>";//aqui irá mostrar a imagem e o nome dpo arquivo.
    }
  }
?>