<?php
/**
 * Created by PhpStorm.
 * User: 23
 * Date: 23.11.16
 */

 
 
if (!empty($_POST)) {
    echo '<p>Sent post data:</p>' . 
		'<pre>' . var_export($_POST, 1) . '</pre>';
}