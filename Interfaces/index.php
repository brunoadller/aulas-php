<?php

interface Crud{
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud{
    public function create(){
        //logica para criar a noticia
    }
    public function read(){
        //logica para ler noticia
    }
    public function update(){
        //logica para atualizar noticia
    }
    public function delete(){
        //logica para deletar noticia
    }
}