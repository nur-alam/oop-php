<?php 

class trick
{
      function doit()
      {
                echo __FUNCTION__;
      }
      function doitagain()
      {
                echo "THIS IS ".__FUNCTION__." METHOD ON ".__CLASS__." CLASS";
      }
}

$obj=new trick();

//$obj->doit();

$obj->doitagain();

echo "</br>".get_class($obj);

?>
