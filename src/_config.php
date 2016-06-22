<?php
interface _config {

/* Dominio principal */

//const _domain = 'anunciadoria.com';
const _domain = 'anunciadoria.pe.hu';

/* Chaves de criptografia */

const iv = 'abcdefghijklmnop';
const chave = 'f0ff05c0a5d3ddcf';

/* Previni cache de arquivos de Plugins JS, CSS e etc */

const _version = 24;

/* Dados para conexão com o banco de dados */

const db_servidor = 'localhost';
const db_usuario = 'u636977446_an';
const db_senha = 'dleite';
const db_banco = 'u636977446_an';
// const db_servidor = 'localhost';
// const db_usuario = 'root';
// const db_senha = '';
// const db_banco = 'db_anunciadoria';


/* SMTP */

const smtp_from = 'Anunciadoria';
const smtp_host = 'mail.anunciadoria.com';
const smtp_port = 587;
const smtp_user = 'site@anunciadoria.com';
const smtp_pass = '%EENowGWYdANvaLuW%';
const smtp_email = 'contato@anunciadoria.com';
const smtp_ssl = NULL;

/* Urls de acesso */

//const _http = 'http://www.anunciadoria.com/';
const _http = 'http://www.anunciadoria.pe.hu/';
//const _https = 'http://www.anunciadoria.com/';
const _https = 'http://www.anunciadoria.pe.hu/';

const sep = '0x1D';

/* Foto de perfil do usuario */

const foto_usuario_w = 300;
const foto_usuario_h = 300;

/* Fotos do anuncio */

const foto_anuncio_thumb_w = 170;
const foto_anuncio_thumb_h = 106;
const foto_anuncio_w = 480;
const foto_anuncio_h = 300;

/* Limits */

const limit_ultimos_anuncios = 10;
const limit_busca_anuncios = 10;
const limit_anuncios = 10;
const limit_mc_anuncios = 10;
const limit_mc_msgs = 10;
const limit_perfil_anuncios = 10;

}
?>
