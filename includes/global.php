<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set("America/Los_Angeles");
session_start();
$inactive = 60;

$today = date('Y-m-d');

const VERSION = "0.0.0.100";
const SALT = "MnQJKty9fTvfXJHrZjq5";

//utilities
function validateUsername($username) {
    // Minimum and maximum length criteria
    $minLength = 3;
    $maxLength = 20;

    // Regular expression for alphanumeric characters only
    $alphanumericRegex = '/^[a-zA-Z0-9]+$/';

    // Check if the username is within the length range
    if (strlen($username) < $minLength || strlen($username) > $maxLength) {
        return "Username must be between $minLength and $maxLength characters.";
    }

    // Check if the username contains only alphanumeric characters
    if (!preg_match($alphanumericRegex, $username)) {
        return "Username must contain only letters and numbers.";
    }

    // Check if the username starts with a letter
    if (!ctype_alpha($username[0])) {
        return "Username must start with a letter.";
    }

    //check if is a forbidden word
    $arr = array('assets','bin','includes','login','logout','profile','register','terms','index','admin');
    if (!in_array($username, $arr)) {
        return "Username taken.";
    }

    // If all criteria are met, return null (indicating validation success)
    return null;
}
function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));
    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }
    return $key;
}

function get_token() {
    return (!empty($_SESSION['token'])) ? $_SESSION['token'] : 0;
}

function phone_number_format($number) {
    // Allow only Digits, remove all other characters.
    $number = preg_replace("/[^\d]/","",$number);

    // get number length.
    $length = strlen($number);

    // if number = 10
    if($length == 10) {
        $number = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $number);
    }

    return $number;

}

function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            }
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    }
    else {
        $output = $text;
    }
    return $output;
}

function gen_uuuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

        // 16 bits for "time_mid"
        mt_rand( 0, 0xffff ),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand( 0, 0x0fff ) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand( 0, 0x3fff ) | 0x8000,

        // 48 bits for "node"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}