<?php

if (isset($modx) && is_object($modx)) {

} elseif (is_object($this->modx)) {
    $modx = &$this->modx;
}

if (isset($modx) && is_object($modx)) {
    $database_type = 'mysql';
    $database_server = '';
    $database_user = '';
    $database_password = '';
    $database_connection_charset = 'utf8';
    $dbase = '';
    $table_prefix = 'modx_';
}
