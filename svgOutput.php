<?php
echo 'test';
if(isset($_POST['svgOutput']))
{
//open file
$file = fopen('demo.dot', 'r+');
//delete file content
ftruncate($file, 0);
//write in file
fputs($file, $_POST['graphtoviz']);
//exec sh to render svg 
$cmd = exec('sh /home/user/Documents/graphiz/demoDot.sh');
echo 'Cr\'ation du graphe termin\'ee \n';
print '<img src="demo.svg" alt="erer">';

fclose($file);
}
 
?>
