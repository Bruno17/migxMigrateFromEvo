<?php
$xpdo_meta_map['RegattaMeldungen']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'regatta_meldungen',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'startnummer' => NULL,
    'startzeit' => NULL,
    'rennennr' => NULL,
    'cox' => '0',
    'row1' => '0',
    'row2' => '0',
    'row3' => '0',
    'row4' => '0',
    'row5' => '0',
    'row6' => '0',
    'row7' => '0',
    'row8' => '0',
    'fixzeit' => NULL,
    'meldestatus' => NULL,
    'rennstartold' => NULL,
    'rennzielold' => NULL,
    'meldeverein' => NULL,
    'rennstatusold' => NULL,
    'xstartzeit' => NULL,
    'nachmeldung' => NULL,
    'boot' => NULL,
    'eventjahr' => NULL,
    'deleted' => '0',
    'comment' => NULL,
    'resultprinted' => '0',
    'eventID' => NULL,
    'platz' => NULL,
    'bootsklasse' => NULL,
    'rennklasse' => NULL,
    'kosten' => NULL,
    'lg' => NULL,
    'leistungsklasse' => NULL,
    'platz_vorlauf' => NULL,
    'platz_halbfinale' => NULL,
    'platz_hofflauf' => NULL,
    'has_vorlauf' => 0,
    'has_halbfinale' => 0,
    'has_hofflauf' => 0,
    'startzeit_vorlauf' => NULL,
    'startzeit_halbfinale' => NULL,
    'startzeit_hofflauf' => NULL,
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
    'startzeit' => 
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
    'cox' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '15',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'row1' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '15',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'row2' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '15',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'row3' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '15',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'row4' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '15',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'row5' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '15',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'row6' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '15',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'row7' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '15',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'row8' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '15',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'fixzeit' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '1',
      'phptype' => 'string',
      'null' => true,
    ),
    'meldestatus' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
    'rennstartold' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
    'rennzielold' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
    'meldeverein' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => true,
    ),
    'rennstatusold' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
    'xstartzeit' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => false,
    ),
    'nachmeldung' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
    'boot' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
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
    'comment' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'resultprinted' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '2',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'eventID' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
    ),
    'platz' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '5',
      'phptype' => 'string',
      'null' => false,
    ),
    'bootsklasse' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '5',
      'phptype' => 'string',
      'null' => false,
    ),
    'rennklasse' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => false,
    ),
    'kosten' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '5',
      'phptype' => 'string',
      'null' => false,
    ),
    'lg' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '5',
      'phptype' => 'string',
      'null' => false,
    ),
    'leistungsklasse' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '5',
      'phptype' => 'string',
      'null' => false,
    ),
    'platz_vorlauf' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '5',
      'phptype' => 'string',
      'null' => false,
    ),
    'platz_halbfinale' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '5',
      'phptype' => 'string',
      'null' => false,
    ),
    'platz_hofflauf' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '5',
      'phptype' => 'string',
      'null' => false,
    ),
    'has_vorlauf' => 
    array (
      'dbtype' => 'int',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'has_halbfinale' => 
    array (
      'dbtype' => 'int',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'has_hofflauf' => 
    array (
      'dbtype' => 'int',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'startzeit_vorlauf' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => false,
    ),
    'startzeit_halbfinale' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => false,
    ),
    'startzeit_hofflauf' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => false,
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
