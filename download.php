<?php
// Aqui vale qualquer coisa, desde que seja um diretório seguro :)
define('DIR_DOWNLOAD', '../download/');
// Vou dividir em passos a criação da variável $arquivo pra ficar mais fácil de entender, mas 
// Retira caracteres especiais

// Aqui a gente só junta o diretório com o nome do arquivo
$caminho_download = DIR_DOWNLOAD ;
// Verificação da existência do arquivo
if (!file_exists($caminho_download))
   die('Arquivo não existe!');
header('Content-type: octet/stream');
// Indica o nome do arquivo como será "baixado". Você pode modificar e colocar qualquer nome de arquivo
header('Content-disposition: attachment; filename="'.$arquivo.'";'); 
// Indica ao navegador qual é o tamanho do arquivo
header('Content-Length: '.filesize($caminho_download));
// Busca todo o arquivo e joga o seu conteúdo para que possa ser baixado
readfile($caminho_download);
exit;