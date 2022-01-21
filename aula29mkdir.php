<?php

    //criar pasta1
    //mkdir('pasta1');

     //criar pasta2 dentro da pasta1
    //mkdir('pasta1/pasta2'); //assim não funciona, pasta1 não existe

    //para resolver
    //mkdir('pasta1/pasta2', 0777, true);

    //para remover dir
    //rmdir('pasta1'); //Warning: rmdir(pasta1): Directory not empty  pasta tem de estar vazia
    //rmdir('pasta1/pasta2'); //assim vai remover a pasta2

    //BOA PRÁTICA É USAR CAMINHOS ABSOLUTOS

    //mkdir (dirname(__FILE__) . '/pasta1');

    //fylesystem
    mkdir(dirname(__FILE__).'/pasta1');
    //change directory
    chdir('pasta1');
    //touch vai criar um ficheiro
    touch('file');
    //voltar para root do ficheiro
    chdir(dirname(__FILE__));
    //chdir('../');//outra forma de voltar para trás nas directorias
    //criar o fileFora na mesma dir onde está o ficheiro
    touch('fileFora');



?>