<?php
$xpdo_meta_map['RegattaVereine']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'regatta_vereine',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'vereinsnummer' => NULL,
    'vereinsname' => NULL,
    'ort' => NULL,
    'kurzform' => NULL,
    'lettern' => NULL,
  ),
  'fieldMeta' => 
  array (
    'vereinsnummer' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => true,
      'index' => 'index',
    ),
    'vereinsname' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '150',
      'phptype' => 'string',
      'null' => true,
    ),
    'ort' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => true,
    ),
    'kurzform' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => true,
    ),
    'lettern' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '15',
      'phptype' => 'string',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'vereinsnummer' => 
    array (
      'alias' => 'vereinsnummer',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'vereinsnummer' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
  ),
);
