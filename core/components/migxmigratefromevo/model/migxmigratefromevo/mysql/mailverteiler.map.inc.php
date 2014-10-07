<?php
$xpdo_meta_map['Mailverteiler']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'mailverteiler',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'email' => '',
    'vorname' => '',
    'nachname' => '',
    'senden' => 0,
  ),
  'fieldMeta' => 
  array (
    'email' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => true,
      'default' => '',
    ),
    'vorname' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => true,
      'default' => '',
    ),
    'nachname' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => true,
      'default' => '',
    ),
    'senden' => 
    array (
      'dbtype' => 'int',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 0,
    ),
  ),
);
