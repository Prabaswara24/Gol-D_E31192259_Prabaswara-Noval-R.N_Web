<?php
$this->benchmark->mark('code_start');
// Some code happens here
$this->benchmark->mark('code_end');
echo $this->benchmark->elapsed_time('code_start', 'code_end');
echo "<hr/>";
echo $this ->benchmark->memory_usage();
?>