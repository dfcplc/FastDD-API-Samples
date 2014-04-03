<?php
/**
 * Capture Variables from Form/Database and setup to
 * be redirected to FastDD to complete the Direct Debit
 * Signup Process
 */
$v_title = "Mr";
$v_firstname = "Joe";
$v_lastname = "Bloggs";
$v_house_number = "16";
$v_postcode = "MK58PL";
$v_email = "joe@bloggs.com";
$v_telephone = "01908422000";
$v_mobile = "07777777777";
$v_dob_d = 11;
$v_dob_m = 10;
$v_dob_y = 1971;
$v_payday = 15;

/**
 * N.B. This Unique Reference number is passed back at
 * the end of the Direct Debit Signup Process, and therefore
 * should be stored somewhere
 */
$v_uniq = "MEMB000001";

/**
 * Setup the FastDD URL String, and then append the
 * variables to the URL String
 */
$url = "https://www.fastdd.co.uk/platinum/start.php?c=c5b69e5f714ddd7a851394a69789abf2";

$url .= "&title=".urlencode($v_title);
$url .= "&first=".urlencode($v_firstname);
$url .= "&last=".urlencode($v_lastname);
$url .= "&house=".urlencode($v_house_number);
$url .= "&post=".urlencode($v_postcode);
$url .= "&uniq=".urlencode($v_uniq);
$url .= "&email=".urlencode($v_email);
$url .= "&telephone=".urlencode($v_telephone);
$url .= "&mobile=".urlencode($v_mobile);
$url .= "&dobd=".urlencode($v_dob_d);
$url .= "&dobm=".urlencode($v_dob_m);
$url .= "&doby=".urlencode($v_dob_y);
$url .= "&paymentdate=".urlencode($v_payday);

/**
 * Finally, redirect the user to the URL prepared
 * above
 */
header('Location: '.$url);
exit();
