<?php
/**
 * Created by PhpStorm.
 * User: cs
 * Date: 2020-06-28
 * Time: 18:20
 */
require_once '../vendor/autoload.php';

use orgtool\Scws;

var_dump((new Scws())->split('中文分词测试'));