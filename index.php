<?php
/**
 * User: blegoh
 * Date: 10/10/15
 * Time: 23:59
 */
session_start();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
require_once 'app/Bootstrap.php';
new Bootstrap();
