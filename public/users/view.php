<?php
require '../../core/functions.php';
require '../../core/db_connect.php';

$input = filter_input_array(INPUT_GET);
$id = preg_replace("/[^a-z0-9-]+/", "", $input['id']);

$content=null;
$stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$id]);

$row = $stmt->fetch();
$content .= "<h1>{$row['id']}</h1>";

$content=<<<EOT
<h1>{$row['first_name']} {$row['last_name']}</h1>


<hr>
<div>
  <a class="btn btn-link" href="users/edit.php?id={$row['id']}">Edit</a>
  <a class="btn btn-link text-danger" href="users/delete.php?id={$row['id']}">Delete</a>
</div>
EOT;

require '../../core/layout.php';