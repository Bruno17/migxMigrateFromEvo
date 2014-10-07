<?php
$xpdo_meta_map['RegattaStartZielzeiten']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'regatta_start_zielzeiten',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'startnummer' => NULL,
    'rennennr' => NULL,
    'rennstart' => NULL,
    'rennziel' => NULL,
    'rennstatus' => NULL,
    'eventjahr' => NULL,
    'deleted' => '0',
  ),
  'fieldMeta' => 
  array (
    'startnummer' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => true,
    ),
    'rennennr' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => true,
      'index' => 'index',
    ),
    'rennstart' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
    'rennziel' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
    'rennstatus' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
    'eventjahr' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => true,
    ),
    'deleted' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '1',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
  ),
  'indexes' => 
  array (
    'rennennr' => 
    array (
      'alias' => 'rennennr',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'rennennr' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
  ),
);
