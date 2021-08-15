<?php
// $name = '呂部委';
//$birth = 1979 ;
// $age = date('Y',time()) - $birth;
// $photo = 'images/head1.jpg';

$name = '呂部委';
$birth = 1979 ;
$age = date('Y',time()) - $birth;
$photo = 'images/head2.jpg';



$html = <<<HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Title of the document</title>
</head>
<body>
<h1>Hello World</h1>
<p>姓名：{$name}</p>
<p>年齡：{$age}</p>
<p><img src="{$photo}"></p>
</body>
</html>
HEREDOC;

echo $html;
?>