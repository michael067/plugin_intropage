<?php

chdir('../../');
include("./include/auth.php");
include("./plugins/intropage/display.php");

set_default_action();


$lopts = db_fetch_cell('SELECT intropage_opts FROM user_auth WHERE id=' . $_SESSION['sess_user_id']);
if ($lopts == 1)
	general_header();

display_information();

if ($lopts == 1)
	top_header();

intropage_console_after();

if ($lopts == 1)
	bottom_footer();

?>