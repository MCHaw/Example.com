<?php
require '../../core/functions.php';
require '../../core/db_connect.php';

$input = filter_input_array(INPUT_GET);
$slug = preg_replace("/[^a-z0-9-]+/", "", $input['slug']);

$content=null;
$stmt = $pdo->prepare('SELECT * FROM posts WHERE slug = ?');
$stmt->execute([$slug]);

$row = $stmt->fetch();
$content .= "<h1>{$row['title']}</h1>";

$content=<<<EOT
<h1>{$row['title']}</h1>
{$row['body']}

<hr>
<div>
  <a class="btn btn-link" href="posts/edit.php?id={$row['id']}">Edit</a>
  <a class="btn btn-link text-danger" href="posts/delete.php?id={$row['id']}">Delete</a>
</div>
EOT;

require '../../core/layout.php';