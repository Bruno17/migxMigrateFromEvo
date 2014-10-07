<?php
$xpdo_meta_map['RegattaBootsklassen']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'regatta_bootsklassen',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'bootsklasse' => NULL,
    'langbezeichnung' => NULL,
    'rowers' => NULL,
    'cox' => NULL,
  ),
  'fieldMeta' => 
  array (
    'bootsklasse' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => true,
    ),
    'langbezeichnung' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '150',
      'phptype' => 'string',
      'null' => true,
    ),
    'rowers' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => true,
    ),
    'cox' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '1',
      'phptype' => 'string',
      'null' => true,
    ),
  ),
);
