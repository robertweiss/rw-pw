<?php

$navModule = $modules->get("MarkupSimpleNavigation");
$navOptions = array(
    'show_root' => false,
    'max_levels' => 1
    );
$mainNav = $navModule->render($navOptions);
?>

?>