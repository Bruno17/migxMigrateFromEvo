<?php
$xpdo_meta_map['Maxigallery']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'maxigallery',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'gal_id' => NULL,
    'filename' => NULL,
    'title' => NULL,
    'date' => NULL,
    'descr' => NULL,
    'pos' => NULL,
    'own_id' => NULL,
    'hide' => 0,
  ),
  'fieldMeta' => 
  array (
    'gal_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
    ),
    'filename' => 
    array (
      'dbtype' => 'tinytext',
      'phptype' => 'string',
      'null' => false,
    ),
    'title' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
    ),
    'date' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
    'descr' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'pos' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => true,
    ),
    'own_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => true,
    ),
    'hide' => 
    array (
      'dbtype' => 'int',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 0,
    ),
  ),
);
