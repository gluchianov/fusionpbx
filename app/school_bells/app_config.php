<?php

	//application details
		$apps[$x]['name'] = "School Bell";
		$apps[$x]['uuid'] = "aadeda26-f3b5-4114-96f4-a7591f069fdf";
		$apps[$x]['category'] = "Switch";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Provide an ability to set up bells scheduler for schools";
		$apps[$x]['description']['es-cl'] = "";
		$apps[$x]['description']['de-de'] = "";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-at'] = "";
		$apps[$x]['description']['fr-fr'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-ch'] = "";
		$apps[$x]['description']['pt-pt'] = "";
		$apps[$x]['description']['pt-br'] = "";

	//permission details
		$y = 0;
		$apps[$x]['permissions'][$y]['name'] = "school_bell_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "fd29e39c-c936-f5fc-8e2b-611681b266b5";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "school_bell_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "school_bell_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "school_bell_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y += 1;

	//schema details
		$y = 0; //table array index
		$z = 0; //field array index
		$apps[$x]['db'][$y]['table']['name'] = "v_school_bells";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "school_bell_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "school_bell_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "school_bell_function_code";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "school_bell_leg_a_type";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "school_bell_leg_a_data";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "school_bell_leg_b_type";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "school_bell_leg_b_data";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "school_bell_timeout";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "school_bell_timezone";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "school_bell_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$z += 1;

		$y += 1;
		$apps[$x]['db'][$y]['table']['name'] = "v_school_bells_schedule";
		$apps[$x]['db'][$y]['table']['parent'] = "v_school_bells";
		$z=0;

		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_school_bells_schedule_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "school_bell_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_school_bells";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "school_bell_uuid";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_school_bells_schedule_type";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Type of schedule. Could be regular or exclude";
		// Next will go very cron-like definitions. Only difference is ranges are not accepted
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_school_bells_schedule_min";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Minutes of the hour. 0-59";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_school_bells_schedule_hour";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Hour. 0-23";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_school_bells_schedule_dow";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Day of the Week. 0-6 (Sunday - Saturday, for compatibility)";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_school_bells_schedule_mon";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Month. 1-12";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_school_bells_schedule_dom";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Day of the month. 1-31";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_school_bells_schedule_year";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Year. Will be set to max 5 from current";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_school_bells_schedule_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Description of time entry";
?>

