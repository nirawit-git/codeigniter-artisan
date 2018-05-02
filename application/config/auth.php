<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config['JWT_ENABLE_']      = false;

$config['JWT_SECRET']       = 'sec!ReT423TrexzillaGod*&';

$config['JWT_ISSUER']       = $_SERVER['REMOTE_ADDR'];

$config['JWT_EXPIRE']       = carbon()->now()->addMinutes(59)->toDateTimeString();

$config['JWT_SAFE_METHODS'] = ['register', 'login'];
