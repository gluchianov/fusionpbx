<?php
/*
	FusionPBX
	Version: MPL 1.1

	The contents of this file are subject to the Mozilla Public License Version
	1.1 (the "License"); you may not use this file except in compliance with
	the License. You may obtain a copy of the License at
	http://www.mozilla.org/MPL/

	Software distributed under the License is distributed on an "AS IS" basis,
	WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
	for the specific language governing rights and limitations under the
	License.

	The Original Code is FusionPBX

	The Initial Developer of the Original Code is
	Mark J Crane <markjcrane@fusionpbx.com>
	Portions created by the Initial Developer are Copyright (C) 2008-2016
	the Initial Developer. All Rights Reserved.

	Contributor(s):
	Mark J Crane <markjcrane@fusionpbx.com>
	Igor Olhovskiy <igorolhovskiy@gmail.com>
*/

//includes
	require_once "root.php";
	require_once "resources/require.php";
	require_once "resources/check_auth.php";

//check permissions
	if (permission_exists('school_bell_add') || permission_exists('school_bell_edit')) {
		//access granted
	}
	else {
		echo "access denied";
		exit;
	}

//add multi-lingual support
	$language = new text;
	$text = $language->get();

//action add, update

//get http post variables and set them to php variables
	if (count($_POST) > 0) {
		//set the variables from the http values
		$school_bell_name = check_str($_POST["school_bell_name"]);
		// ...
	}

    if (isset($_REQUEST["id"])) {
        $action = "update";
        $e911_uuid = check_str($_REQUEST["id"]);
    }
    else {
        $action = "add";
    }

    if (count($_POST) > 0 && strlen($_POST["persistformvar"]) == 0) {

    	$msg = '';
    	if ($action == "update") {
    		$e911_uuid = check_str($_POST["e911_uuid"]);
    	}

    	//check for all required data
    	if (strlen($e911_did) == 0) { $msg .= $text['message-required'].$text['label-e911_did']."<br>\n"; }
    	if (strlen($e911_address_1) == 0) { $msg .= $text['message-required'].$text['llabel-e911_address_1']."<br>\n"; }
    	if (strlen($e911_city) == 0) { $msg .= $text['message-required'].$text['label-e911_city']."<br>\n"; }
    	if (strlen($e911_state) == 0) { $msg .= $text['message-required'].$text['label-e911_state']."<br>\n"; }
    	if (strlen($e911_zip) == 0 || strlen($e911_zip_4) == 0) { $msg .= $text['message-required'].$text['label-e911_zip']."<br>\n"; }
    	if (strlen($e911_callername) == 0) { $msg .= $text['message-required'].$text['label-e911_callername']."<br>\n"; }

    	if (strlen($msg) > 0 && strlen($_POST["persistformvar"]) == 0) {
    		require_once "resources/header.php";
    		require_once "resources/persist_form_var.php";
    		echo "<div align='center'>\n";
    		echo "<table><tr><td>\n";
    		echo $msg."<br />";
    		echo "</td></tr></table>\n";
    		persistformvar($_POST);
    		echo "</div>\n";
    		require_once "resources/footer.php";
    		return;
    	}

    	//add or update the database
    	if ($_POST["persistformvar"] != "true") {
            $e911_data = array(
                    'e911_did' => $e911_did,
                    'e911_address_1' => $e911_address_1,
                    'e911_address_2' => $e911_address_2,
                    'e911_city' => $e911_city,
                    'e911_state' => $e911_state,
                    'e911_zip' => $e911_zip,
                    'e911_zip_4' => $e911_zip_4,
                    'e911_callername' => $e911_callername,
                    'e911_alert_email' => $e911_alert_email,
                    'e911_alert_email_enable' => $e911_alert_email_enable,
                );

    		if ($action == "add" && permission_exists('e911_add')) {

                // Make api calls here; Seems never would be used
                if (validate_e911_data($e911_data)) {
                    if (add_e911_data($e911_data)) {
                        if ($e911_alert_email_enable == 'True') {
                            if (!add_e911_alert($e911_alert_email)) {
                                $e911_alert_email_enable = "False";
                            }
                        }
                    } else {
                        $e911_validated = "Not added";
                        $e911_alert_email_enable = "False";
                    }
                } else {
                    $e911_validated = "Not validated";
                    $e911_alert_email_enable = "False";
                }

    			//prepare the uuids
    			$e911_uuid = uuid();
    			//add the e911 info
    			$sql = "insert into v_e911 ";
    			$sql .= "(";
    			$sql .= "domain_uuid, ";
    			$sql .= "e911_uuid, ";
    			$sql .= "e911_did, ";
    			$sql .= "e911_address_1, ";
    			$sql .= "e911_address_2, ";
    			$sql .= "e911_city, ";
    			$sql .= "e911_state, ";
    			$sql .= "e911_zip, ";
    			$sql .= "e911_zip_4, ";
    			$sql .= "e911_callername, ";
    			$sql .= "e911_alert_email_enable, ";
    			$sql .= "e911_alert_email, ";
	                $sql .= "e911_validated";
    			$sql .= ") ";
    			$sql .= "values ";
    			$sql .= "(";
    			$sql .= "'$domain_uuid', ";
    			$sql .= "'".$e911_uuid."', ";
    			$sql .= "'$e911_did', ";
    			$sql .= "'$e911_address_1', ";
    			$sql .= "'$e911_address_2', ";
    			$sql .= "'$e911_city', ";
    			$sql .= "'$e911_state', ";
    			$sql .= "'$e911_zip', ";
    			$sql .= "'$e911_zip_4', ";
    			$sql .= "'$e911_callername', ";
    			$sql .= "'$e911_alert_email_enable', ";
    			$sql .= "'$e911_alert_email', ";
        	        $sql .= "'$e911_validated'";
    			$sql .= ")";
    			$db->exec(check_sql($sql));
                $sql_add = "ADD :".$sql;
    			unset($sql);
    		} //if ($action == "add")

    		if ($action == "update" && permission_exists('e911_edit')) {

                // Make api calls here
                if (!isset($_REQUEST["update_from_server"])) {
                    $e911_update_result = update_e911($e911_data);
                    $e911_alert_email_enable = $e911_update_result['e911_alert_email_enable'];
                    $e911_validated = $e911_update_result['e911_validated'];
                } // No need to call update API if it was update from server.
    			// update e911 info
    			$sql = "update v_e911 set ";
    			$sql .= "e911_did = '$e911_did', ";
    			$sql .= "e911_address_1 = '$e911_address_1', ";
    			$sql .= "e911_address_2 = '$e911_address_2', ";
    			$sql .= "e911_city = '$e911_city', ";
    			$sql .= "e911_state = '$e911_state', ";
    			$sql .= "e911_zip = '$e911_zip', ";
    			$sql .= "e911_zip_4 = '$e911_zip_4', ";
    			$sql .= "e911_callername = '$e911_callername', ";
                $sql .= "e911_alert_email_enable = '$e911_alert_email_enable', ";
    			$sql .= "e911_validated = '$e911_validated', ";
    			$sql .= "e911_alert_email = '$e911_alert_email' ";
    			$sql .= "where domain_uuid = '$domain_uuid' ";
    			$sql .= "and e911_uuid = '$e911_uuid'";
    			$db->exec(check_sql($sql));
                $sql_update = "UPDATE :".$sql;
    			unset($sql);
    		} //if ($action == "update")

    	} //if ($_POST["persistformvar"] != "true")
    } // if (count($_POST) > 0 && strlen($_POST["persistformvar"]) == 0)

//get the recordings
	$sql = "SELECT recording_name, recording_filename FROM v_recordings";
	$sql .= " WHERE domain_uuid = '".$domain_uuid."' ";
	$sql .= " ORDER BY recording_name ASC";
	$prep_statement = $db->prepare(check_sql($sql));
	$prep_statement->execute();
	$recordings = $prep_statement->fetchAll(PDO::FETCH_ASSOC);

//get the phrases
	$sql = "SELECT * FROM v_phrases";
	$sql .= " WHERE (domain_uuid = '".$domain_uuid."'";
	$sql .= " OR domain_uuid IS NULL) ";
	$prep_statement = $db->prepare(check_sql($sql));
	$prep_statement->execute();
	$phrases = $prep_statement->fetchAll(PDO::FETCH_NAMED);

//get the sound files
	$file = new file;
	$sound_files = $file->sounds();

//pre-populate the form
	if (count($_GET) > 0 && $_POST["persistformvar"] != "true") {
		$e911_uuid = check_str($_GET["id"]);
		$sql = "select * from v_school_bells ";
		$sql .= "where domain_uuid = '$domain_uuid' ";
		$sql .= "and e911_uuid = '$e911_uuid' ";
		$prep_statement = $db->prepare(check_sql($sql));
		$prep_statement->execute();
		$result = $prep_statement->fetchAll();
		foreach ($result as &$row) {
            //set the php variables
            $e911_did = $row["e911_did"];
            $e911_address_1 = $row["e911_address_1"];
            $e911_address_2 = $row["e911_address_2"];
            $e911_city = $row["e911_city"];
            $e911_state = $row["e911_state"];
            $e911_zip = $row["e911_zip"];
            $e911_zip_4 = $row["e911_zip_4"];
            $e911_callername = $row["e911_callername"];
            $e911_alert_email_enable = $row["e911_alert_email_enable"];
            $e911_alert_email = $row["e911_alert_email"];
            $e911_validated = $row["e911_validated"];
		}
		unset ($prep_statement);
	}

//show the header
	require_once "resources/header.php";
	if ($action == "update") {
		$document['title'] = $text['title-school_bells-edit'];
	}
	if ($action == "add") {
		$document['title'] = $text['title-school_bells-add'];
	}

//show the content
	echo "<form method='post' name='frm' action=''>\n";
	echo "<table width='100%' border='0' cellpadding='0' cellspacing='0'>\n";
	echo "<tr>\n";
	echo "<td align='left' width='30%' nowrap='nowrap'><b>";
	if ($action == "update") {
		echo $text['header-school_bells-edit'];
	}
	if ($action == "add") {
		echo $text['header-school_bells-add'];
	}
	echo "</b></td>\n";
	echo "<td width='70%' align='right'>";
	echo "	<input type='button' class='btn' name='' alt='".$text['button-back']."' onclick=\"window.location='e911.php'\" value='".$text['button-back']."'>";
	echo "	<input type='submit' name='submit' class='btn' value='".$text['button-save']."'>\n";
	echo "</td>\n";
	echo "</tr>\n";

    // Address 1
	echo "<tr>\n";
	echo "<td class='vncellreq' valign='top' align='left' nowrap='nowrap'>\n";
	echo "	".$text['label-e911_address_1']."\n";
	echo "</td>\n";
	echo "<td class='vtable' align='left'>\n";
	echo "	<input class='formfld' type='text' name='e911_address_1' maxlength='255' value=\"" . escape($e911_address_1) . "\">\n";
	echo "<br />\n";
	echo $text['description-e911_address_1']."\n";
	echo "</td>\n";
	echo "</tr>\n";

    // Address 2
    echo "<tr>\n";
    echo "<td class='vncellreq' valign='top' align='left' nowrap='nowrap'>\n";
    echo "  ".$text['label-e911_address_2']."\n";
    echo "</td>\n";
    echo "<td class='vtable' align='left'>\n";
    echo "  <input class='formfld' type='text' name='e911_address_2' maxlength='255' value=\"" . escape($e911_address_2) . "\">\n";
    echo "<br />\n";
    echo $text['description-e911_address_2']."\n";
    echo "</td>\n";
    echo "</tr>\n";

    // City
	echo "<tr>\n";
	echo "<td class='vncellreq' valign='top' align='left' nowrap='nowrap'>\n";
	echo "	".$text['label-e911_city']."\n";
	echo "</td>\n";
	echo "<td class='vtable' align='left'>\n";
	echo "	<input class='formfld' type='text' name='e911_city' maxlength='255' value=\"" . escape($e911_city) . "\">\n";
	echo "<br />\n";
	echo $text['description-e911_city']."\n";
	echo "</td>\n";
	echo "</tr>\n";

    // State
    echo "<tr>\n";
    echo "<td class='vncellreq' valign='top' align='left' nowrap='nowrap'>\n";
    echo "  ".$text['label-e911_state']."\n";
    echo "</td>\n";
    echo "<td class='vtable' align='left'>\n";
    echo "  <input class='formfld' type='text' name='e911_state' maxlength='255' value=\"" . escape($e911_state) . "\">\n";
    echo "<br />\n";
    echo $text['description-e911_state']."\n";
    echo "</td>\n";
    echo "</tr>\n";

    // Zip
    echo "<tr>\n";
    echo "<td class='vncellreq' valign='top' align='left' nowrap='nowrap'>\n";
    echo "  ".$text['label-e911_zip']."\n";
    echo "</td>\n";
    echo "<td class='vtable' align='left'>\n";
    echo "  <input class='formfld' type='text' name='e911_zip' maxlength='255' value=\"" . escape($e911_zip) . "\">\n";
    echo "<br />\n";
    echo $text['description-e911_zip']."\n";
    echo "</td>\n";
    echo "</tr>\n";


    // Zip+4
    echo "<tr>\n";
    echo "<td class='vncellreq' valign='top' align='left' nowrap='nowrap'>\n";
    echo "  ".$text['label-e911_zip_4']."\n";
    echo "</td>\n";
    echo "<td class='vtable' align='left'>\n";
    echo "  <input class='formfld' type='text' name='e911_zip_4' maxlength='255' value=\"" . escape($e911_zip_4) . "\">\n";
    echo "<br />\n";
    echo $text['description-e911_zip_4']."\n";
    echo "</td>\n";
    echo "</tr>\n";

    // Callername
    echo "<tr>\n";
    echo "<td class='vncellreq' valign='top' align='left' nowrap='nowrap'>\n";
    echo "  ".$text['label-e911_callername']."\n";
    echo "</td>\n";
    echo "<td class='vtable' align='left'>\n";
	echo "  <input class='formfld' type='text' name='e911_callername' maxlength='255' value=\"" . escape($e911_callername) . "\">\n";
    echo "<br />\n";
    echo $text['description-e911_callername']."\n";
    echo "</td>\n";
    echo "</tr>\n";

    // Alert email
    echo "<tr>\n";
    echo "<td class='vncellreq' valign='top' align='left' nowrap='nowrap'>\n";
    echo "  ".$text['label-e911_alert_email']."\n";
    echo "</td>\n";
    echo "<td class='vtable' align='left'>\n";
    echo "  <input class='formfld' type='text' name='e911_alert_email' maxlength='255' value=\"" . escape($e911_alert_email) . "\">\n";
    echo "<br />\n";
    echo $text['description-e911_alert_email']."\n";
    echo "</td>\n";
    echo "</tr>\n";

    // Alert email enable
    echo "<tr>\n";
    echo "<td class='vncellreq' valign='top' align='left' nowrap='nowrap'>\n";
    echo "    ".$text['label-e911_alert_email_enable']."\n";
    echo "</td>\n";
    echo "<td class='vtable' align='left'>\n";
    echo "    <select class='formfld' name='e911_alert_email_enable'>\n";
    if ($e911_alert_email_enable == "true") {
        echo "    <option value='true' selected='selected'>".$text['label-true']."</option>\n";
    }
    else {
        echo "    <option value='true'>".$text['label-true']."</option>\n";
    }
    if ($e911_alert_email_enable == "false") {
        echo "    <option value='false' selected >".$text['label-false']."</option>\n";
    }
    else {
        echo "    <option value='false'>".$text['label-false']."</option>\n";
    }
    echo "    </select>\n";
    echo "<br />\n";
    echo $text['description-e911_alert_email_enable']."\n";
    echo "</td>\n";
    echo "</tr>\n";

    // Validated
    echo "<tr>\n";
    echo "<td>\n";
    echo "<center><b>";
    if ($e911_validated == "") {
        echo "No information\n";
    } else {
        echo "$e911_validated\n";
    }
    echo "</b></center>";
    echo "<br />\n";
    echo "<br />\n";
//    echo $sql_update;
    echo "</td>\n";
    echo "</tr>\n";

	echo "	<tr>\n";
	echo "		<td colspan='2' align='right'>\n";
	if ($action == "update") {
		echo "		<input type='hidden' name='e911_uuid' value='" . escape($e911_uuid) . "'>\n";
        echo "      <input type='hidden' name='e911_validated' value='" . escape($e911_validated) . "'>\n";
	}
	echo "			<br>";
	echo "			<input type='submit' name='submit' class='btn' value='".$text['button-save']."'>\n";
	echo "		</td>\n";
	echo "	</tr>";
	echo "</table>";
	echo "<br><br>";
	echo "</form>";

//include the footer
	require_once "resources/footer.php";
?>
