<?php

	//application details
		$apps[$x]['name'] = "XML CDR";
		$apps[$x]['uuid'] = "4a085c51-7635-ff03-f67b-86e834422848";
		$apps[$x]['category'] = "Switch";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Call Detail Records with all information about the call.";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "Detaillierte Historie mit informationen über alle Anrufe.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "Detaillierte Historie mit informationen über alle Anrufe.";
		$apps[$x]['description']['es-cl'] = "Registro de detalle de llamados con toda la información de la llamada";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "Historique des Appels complets.";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "";
		$apps[$x]['description']['pt-pt'] = "Detalhes das Gravações de Voz com todas as informações sobre a chamada.";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "Записи о вызовах с полной детализацией.";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//permission details
		$y = 0;
		$apps[$x]['permissions'][$y]['name'] = "xml_cdr_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "8f80e71a-31a5-6432-47a0-7f5a7b271f05";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "xml_cdr_search";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "xml_cdr_search_advanced";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "xml_cdr_domain";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "xml_cdr_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "xml_cdr_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "xml_cdr_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "xml_cdr_details";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "xml_cdr_pdd";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "xml_cdr_mos";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "xml_cdr_all";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "xml_cdr_b_leg";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "hangup_cause";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y += 1;
		$apps[$x]['permissions'][$y]['name'] = "caller_destination";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";

	//default settings
		$y = 0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "0f208802-5f18-41f9-97a3-45e939e7a1b8";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "cdr";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "b_leg";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "outbound";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y += 1;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "d9d09758-6deb-47e5-b5bb-812da3a8d196";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "cdr";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "b_leg";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "inbound";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y += 1;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "74e33709-da7d-4d46-a31f-6580ab9a7714";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "cdr";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "b_leg";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "local";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y += 1;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "dbbadd02-f95d-480b-85d5-2a4113d4cccc";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "cdr";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "format";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "json";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y += 1;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "23335ac0-9466-4d16-af3f-81aa347159b1";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "cdr";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "storage";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "db";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y += 1;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "cdb19dda-234b-407a-9eda-e8af74597d4b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "cdr";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "limit";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "800";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y += 1;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "dd09aca6-5663-11e7-907b-a6006ad3dba0";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "cdr";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "stat_hours_limit";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "24";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y += 1;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "cea53099-96c0-405f-ada6-219d0b398944";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "cdr";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "http_enabled";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y += 1;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "07c2fa20-87d2-4576-a6d3-09d1ffd752b2";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "cdr";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "join_view";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Try to join same calls in CDR report (like not show loose_race). uuid,close_match,lose_race";

	//schema details
		$y = 0;
		$apps[$x]['db'][$y]['table']['name'] = "v_xml_cdr";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z = 0;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "id";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "xml_cdr_id";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "serial";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "integer";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "INT NOT NULL AUTO_INCREMENT";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "xml_cdr_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "extension_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_extensions";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "extension_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_id";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "accountcode";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "direction";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_language";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "context";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "xml";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "xml_cdr";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "json";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "jsonb";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "caller_id_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "caller_id_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "caller_destination";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "source_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "start_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "bigint";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "start_stamp";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "timestamp";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "date";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "timestamp";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "answer_stamp";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "timestamp";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "date";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "timestamp";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "answer_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "bigint";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "end_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "bigint";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "end_stamp";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "duration";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "mduration";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "billsec";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "billmsec";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "bridge_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "read_codec";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "read_rate";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "write_codec";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "write_rate";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "remote_media_ip";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "network_addr";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "recording_file";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Indicates if a recording was made. If a recording exists set this value to true.";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "recording_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "record_path";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "record_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "leg";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "char(1)";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(1)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The leg of the call a or b.";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "pdd_ms";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "smallint";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Post Dial Delay (PDD) in miliseconds. Divide by 1000 for seconds.";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "rtp_audio_in_mos";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "last_app";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Save the last application in the leg.";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "last_arg";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Save the last application data.";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "cc_side";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Queue side is either member or agent";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "cc_member_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Unique member identifier";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "cc_queue_joined_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "bigint";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Epoch when caller joined the queue";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "cc_queue";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Queue";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "cc_member_session_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Unique session identifier";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "cc_agent_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "agent id";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "cc_agent";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "agent name";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "cc_agent_type";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "agent type";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "cc_agent_bridged";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "bridged true or false";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "cc_queue_answered_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "bigint";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "queue answered epoch";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "cc_queue_terminated_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "bigint";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "queue terminated epoch";
		$z += 1;
 		$apps[$x]['db'][$y]['fields'][$z]['name'] = "cc_queue_canceled_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "bigint";
 		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "cause";
 		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "cc_cancel_reason";
 		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
 		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "cause";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "cc_cause";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "agent type";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "waitsec";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "wait seconds";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "conference name";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "conference unique identifier";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_member_id";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "conference member id";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "digits_dialed";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "digits dialed";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "pin_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "pin number";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "hangup_cause";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "hangup_cause_q850";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z += 1;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "sip_hangup_disposition";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Save who hung up or cancelled the leg.";

?>
