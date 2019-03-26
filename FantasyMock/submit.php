<?php

/*
 * Copyright (C) 2019 allen
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 *
 * @author allen
 */

define("host","localhost");
define("dbname","jeopardy");
define("username","test");
define("passwd","password");

$db = new mysqli(host, username, passwd, dbname);

$name = sanitize_string($_POST["name"]);
$email = sanitize_string($_POST["email"]);
$team0 = sanitize_string($_POST["team0"]);
$team1 = sanitize_string($_POST["team1"]);
$team2 = sanitize_string($_POST["team2"]);
$team3 = sanitize_string($_POST["team3"]);
$team4 = sanitize_string($_POST["team4"]);
$team5 = sanitize_string($_POST["team5"]);
$team6 = sanitize_string($_POST["team6"]);
$team7 = sanitize_string($_POST["team7"]);

$insertString = "INSERT INTO teams(name,email,team0,team1,team2,team3,team4,team5,team6,team7) "
            . "VALUES($name,$email,$team0,$team1,$team2,$team3,$team4,$team5,$team6,$team7)";

$db->query($insertString);
        
function sanitize_string($string) {
    if (get_magic_quotes_gpc()) {
        $string = stripslashes($string);
    }
    return htmlentities($string);
}
