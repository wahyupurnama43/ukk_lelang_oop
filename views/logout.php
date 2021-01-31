<?php
include '../models/database.php';
include "../models/login.php";

$l = new Login();

$l->logout();
