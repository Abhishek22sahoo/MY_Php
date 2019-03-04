<?php
print_r(welcome($_POST["Abhi"]));
function welcome($name)
{return "welcome".$name;
}
?>