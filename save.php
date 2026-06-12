<?php

$answer = $_POST['answer'] ?? '';
$message = $_POST['message'] ?? '';

$data =
"Answer: ".$answer."\n".
"Message: ".$message."\n".
"-------------------\n";

file_put_contents(
"responses.txt",
$data,
FILE_APPEND
);

echo "
<h1>Thank You ❤️</h1>
<p>Your response has been saved.</p>
";

?>