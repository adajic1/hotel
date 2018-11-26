<?php
	require_once ('db.php'); 
	$subscriber_email = getVar("email");
	$subscriber_mod = getVar("mod"); // mod 0 -> add subscriber, mod 1 -> remove subscriber
	if ($subscriber_mod == NULL) $subscriber_mod = 0; // Add subscriber	
	if ($subscriber_mod==0) {
		// SUBSCRIBE
		if ($subscriber_email!=NULL && strpos($subscriber_email, '@') !== false && strpos($subscriber_email, '.') !== false) {			
			// Look for this email in database, if there is none then add it
			$sql = "SELECT * FROM subscribers WHERE email = ?";
			$db->runQuery($sql, array($subscriber_email), "Error in SQL execution: ", 1, 1, 0);
			$result = $db->result;
			if (count($result)==0) {
				$sql = "INSERT INTO subscribers (email) VALUES ";
				$variables=array((string)$subscriber_email);
				$db->runQuery($sql, $variables, "Error in SQL execution: ", 1, 0, 1);
				print "Thank you. You are subscribed.";
			} else print "You are already subscribed.";
		} else print "Please provide a valid email address.";
	} else {
		// UNSUBSCRIBE
		if ($subscriber_email!=NULL && strpos($subscriber_email, '@') !== false && strpos($subscriber_email, '.') !== false) {
			// Remove this email from the database
			$sql = "DELETE FROM subscribers WHERE email = ?";
			$variables=array((string)$subscriber_email);
			$db->runQuery($sql, $variables, "Error in SQL execution: ", 1, 0, 0);
			print "You are unsubscribed.";
		} else print "Please provide a valid email address.";
	}
?>