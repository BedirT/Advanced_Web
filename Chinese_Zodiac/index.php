<html>
<head>
	<meta charset="UTF-8">
	<title>Chinese Zodiac</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
	if (isset($_GET['page'])) {
		switch ($_GET['page']) {
			case 'site_layout':
				include('include/inc_site_layout.php');
				break;
			case 'control_structures':
				include('include/' .
					'inc_control_structures.php');
				break;
			case 'string_functions':
				include('include/' .
					'inc_string_functions.php');
				break;
			case 'web_forms':
				include('include/inc_web_forms.php'); break;
			case 'midterm_assessment':
				include('include/' .
					'inc_midterm_assessment.php');
				break;
			case 'state_information':
				include('include/' .
					'inc_state_information.php');
				break;
			case 'user_templates':
				include('include/' .
					'inc_user_templates.php');
				break;
			case 'final_project':
				include('include/' .
					'inc_final_project.php');
				break;
			default:
				include('include/inc_home.php');
				break;
			}
		}
    else
    	include('include/inc_home.php');
    ?>
</body>
</html>
