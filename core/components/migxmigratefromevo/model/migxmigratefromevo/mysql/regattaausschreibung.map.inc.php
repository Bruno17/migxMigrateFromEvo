<?php
$xpdo_meta_map['RegattaAusschreibung']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'regatta_ausschreibung',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'nr' => NULL,
    'rennklasse' => NULL,
    'altersklasse' => NULL,
    'bootsklasse' => NULL,
    'gig' => NULL,
    'vereinsmannschaft' => NULL,
    'strecke' => NULL,
    'besonderheiten' => NULL,
    'meldegeld' => NULL,
    'zeitvorgabe' => NULL,
  ),
  'fieldMeta' => 
  array (
    'nr' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => true,
    ),
    'rennklasse' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
    'altersklasse' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
    'bootsklasse' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '30',
      'phptype' => 'string',
      'null' => true,
    ),
    'gig' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => true,
    ),
    'vereinsmannschaft' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => true,
    ),
    'strecke' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => true,
    ),
    'besonderheiten' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => true,
    ),
    'meldegeld' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => true,
    ),
    'zeitvorgabe' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => true,
    ),
  ),
);
