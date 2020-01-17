<?php

// Unset All Session


$session = array_keys($_SESSION); //get all session keys
foreach ($session as $key) { // fetch all active session
    unset($_SESSION[$key]); // unset
}

?>
