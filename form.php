<?php
/**
 * Created by PhpStorm.
 * User: 23
 * Date: 23.11.16
 * Time: 20:55
 */

if (!empty($_POST)) {
    echo '<p>Post data:</p><pre>' . var_export($_POST, 1) . '</pre>';
}