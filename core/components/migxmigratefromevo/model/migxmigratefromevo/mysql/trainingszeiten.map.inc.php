<?php
$xpdo_meta_map['Trainingszeiten']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'trainingszeiten',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'Tag' => NULL,
    'Zeitweise' => NULL,
    'Uhrzeit' => NULL,
    'Ort' => NULL,
    'Zielgruppe' => NULL,
    'Trainingsart' => NULL,
    'Trainer' => NULL,
    'Zeitraum' => NULL,
  ),
  'fieldMeta' => 
  array (
    'Tag' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => false,
    ),
    'Zeitweise' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '30',
      'phptype' => 'string',
      'null' => false,
    ),
    'Uhrzeit' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '15',
      'phptype' => 'string',
      'null' => false,
    ),
    'Ort' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '200',
      'phptype' => 'string',
      'null' => false,
    ),
    'Zielgruppe' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
    ),
    'Trainingsart' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
    ),
    'Trainer' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '200',
      'phptype' => 'string',
      'null' => false,
    ),
    'Zeitraum' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => false,
    ),
  ),
);
