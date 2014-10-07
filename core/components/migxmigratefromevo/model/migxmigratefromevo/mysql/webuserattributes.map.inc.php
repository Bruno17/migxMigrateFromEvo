<?php
$xpdo_meta_map['WebUserAttributes']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'web_user_attributes',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'internalKey' => 0,
    'fullname' => '',
    'role' => 0,
    'email' => '',
    'phone' => '',
    'mobilephone' => '',
    'blocked' => 0,
    'blockeduntil' => 0,
    'blockedafter' => 0,
    'logincount' => 0,
    'lastlogin' => 0,
    'thislogin' => 0,
    'failedlogincount' => 0,
    'sessionid' => '',
    'dob' => 0,
    'gender' => 0,
    'country' => '',
    'state' => '',
    'zip' => '',
    'fax' => '',
    'photo' => '',
    'comment' => '',
    'lum_StyleID' => 1,
    'lum_CustomStyle' => NULL,
    'lum_FirstName' => '',
    'lum_LastName' => '',
    'lum_VerificationKey' => '',
    'lum_EmailVerificationKey' => NULL,
    'lum_UtilizeEmail' => '0',
    'lum_ShowName' => '1',
    'lum_Icon' => NULL,
    'lum_Attributes' => NULL,
    'lum_CountDiscussions' => 0,
    'lum_CountComments' => 0,
    'lum_DateFirstVisit' => '2007-01-01 00:00:00',
    'lum_DateLastActive' => '2007-01-01 00:00:00',
    'lum_RemoteIp' => '',
    'lum_LastDiscussionPost' => NULL,
    'lum_DiscussionSpamCheck' => 0,
    'lum_LastCommentPost' => NULL,
    'lum_CommentSpamCheck' => 0,
    'lum_UserBlocksCategories' => '0',
    'lum_DefaultFormatType' => NULL,
    'lum_Discovery' => NULL,
    'lum_Preferences' => NULL,
    'lum_SendNewApplicantNotifications' => '0',
  ),
  'fieldMeta' => 
  array (
    'internalKey' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'fullname' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'role' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'email' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'phone' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'mobilephone' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'blocked' => 
    array (
      'dbtype' => 'int',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'blockeduntil' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'blockedafter' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'logincount' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'lastlogin' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'thislogin' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'failedlogincount' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'sessionid' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'dob' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'gender' => 
    array (
      'dbtype' => 'int',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'country' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '5',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'state' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '25',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'zip' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '25',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'fax' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'photo' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'comment' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'lum_StyleID' => 
    array (
      'dbtype' => 'int',
      'precision' => '3',
      'phptype' => 'integer',
      'null' => false,
      'default' => 1,
    ),
    'lum_CustomStyle' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
    ),
    'lum_FirstName' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'lum_LastName' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'lum_VerificationKey' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'lum_EmailVerificationKey' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => true,
    ),
    'lum_UtilizeEmail' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'1\',\'0\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'lum_ShowName' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'1\',\'0\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '1',
    ),
    'lum_Icon' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
    ),
    'lum_Attributes' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'lum_CountDiscussions' => 
    array (
      'dbtype' => 'int',
      'precision' => '8',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'lum_CountComments' => 
    array (
      'dbtype' => 'int',
      'precision' => '8',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'lum_DateFirstVisit' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
      'default' => '2007-01-01 00:00:00',
    ),
    'lum_DateLastActive' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
      'default' => '2007-01-01 00:00:00',
    ),
    'lum_RemoteIp' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'lum_LastDiscussionPost' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'lum_DiscussionSpamCheck' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'lum_LastCommentPost' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'lum_CommentSpamCheck' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'lum_UserBlocksCategories' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'1\',\'0\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'lum_DefaultFormatType' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
    'lum_Discovery' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'lum_Preferences' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'lum_SendNewApplicantNotifications' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'1\',\'0\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
  ),
  'indexes' => 
  array (
    'userid' => 
    array (
      'alias' => 'userid',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'internalKey' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
