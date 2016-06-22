<?php
interface _config {

/* Dominio principal */

//const _domain = 'anunciadoria.com/';
const _domain = 'http://www.anunciadoria.pe.hu/';

/* Chaves de criptografia */

const iv = 'abcdefghijklmnop';
const chave = 'f0ff05c0a5d3ddcf';

/* Previni cache de arquivos de Plugins JS, CSS e etc */

const _version = 5;

/* Dados para conexão com o banco de dados */

const db_servidor = 'localhost';
const db_usuario = 'u636977446_an';
const db_senha = 'dleite';
const db_banco = 'u636977446_an';

/* SMTP */

const smtp_from = 'Anunciadoria';
const smtp_host = 'mail.anunciadoria.com';
const smtp_port = 587;
const smtp_user = 'site@anunciadoria.com';
const smtp_pass = '%EENowGWYdANvaLuW%';
const smtp_email = 'contato@anunciadoria.com';
const smtp_ssl = NULL;

/* Urls de acesso */

const _http = 'http://www.anunciadoria.pe.hu/admin/';
const _https = 'http://www.anunciadoria.pe.hu/admin/';
const _http_ori = 'http://www.anunciadoria.pe.hu/';

/* Configurações adicionais */

const interesses_limit = 10;
const newsletter_limit = 10;
const usuarios_limit = 10;
const anuncios_limit = 10;

}
?>
