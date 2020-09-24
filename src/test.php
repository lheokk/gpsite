<?php

    $_test = new Test();
    $data = $_test->All();
    
    shuffle($data);
    
    $elem = $data[0];
   
?>


<img src="<?= $elem['src'] ?>" />
<p>
    <?= $elem['text'] ?>
</p>