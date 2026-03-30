<?php

if (isset($_GET["jmeno"])) {
    echo "ahoj " . $_GET["jmeno"];
} else {
    echo "zadej jmeno";
}