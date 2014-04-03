<?php
/**
 * FastDD will call this URL after the Direct Debit
 * Signup has been completed, you can then reference
 * the initial Unique Reference back to your system to
 * store the Signup as completed
 */


$v_uniq = $_GET['uniq'];
$v_dfc_reference = $_GET['membref'];

//Now store these to a Database, send emails etc as required