<?php // $Id: version.php 169 2012-12-10 10:02:28Z malu $

defined('MOODLE_INTERNAL') || die;

$plugin->version   = 2013061800;
$plugin->release   = '2.3, rc 2';
$plugin->requires  = 2012062500.00; // Moodle 2.3.0
$plugin->component = 'block_majhub_voting';

$plugin->dependencies = array(
    'local_majhub' => 2012120100,
);
