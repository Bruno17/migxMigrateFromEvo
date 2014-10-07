<?php
$xpdo_meta_map['RegattaAktivenliste']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'regatta_aktivenliste',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'akt_id' => NULL,
    'vorname' => NULL,
    'nachname' => NULL,
    'titel' => NULL,
    'geschlecht' => NULL,
    'jahrgang' => NULL,
    'vereinsnummer' => NULL,
    'vereinsname' => NULL,
    'startberechtigt' => NULL,
  ),
  'fieldMeta' => 
  array (
    'akt_id' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
      'index' => 'index',
    ),
    'vorname' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => true,
      'index' => 'index',
    ),
    'nachname' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => true,
      'index' => 'index',
    ),
    'titel' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
    'geschlecht' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '1',
      'phptype' => 'string',
      'null' => true,
    ),
    'jahrgang' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
    ),
    'vereinsnummer' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => true,
    ),
    'vereinsname' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => true,
    ),
    'startberechtigt' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'akt_id' => 
    array (
      'alias' => 'akt_id',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'akt_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'vorname' => 
    array (
      'alias' => 'vorname',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'vorname' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'nachname' => 
    array (
      'alias' => 'nachname',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'nachname' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
  ),
);
