<?php

/**
 * Created by PhpStorm.
 * User: YasankaRJ
 * Date: 5/27/19
 * Time: 3:23 PM
 */

include_once 'Originator.php';
include_once 'Caretaker.php';

use MementoPHP\Originator as Originator;
use MementoPHP\Caretaker as Caretaker;


/**
 * Client code.
 */
$originator = new Originator("---");
$caretaker = new Caretaker($originator);

$caretaker->backup();
$originator->doOperation('AAA');

echo "\n";
$caretaker->showHistory();

$caretaker->backup();
$originator->doOperation('BBB');

echo "\n";
$caretaker->showHistory();

$caretaker->backup();
$originator->doOperation('CCC');

echo "\n";
$caretaker->showHistory();

echo "\nClient: Now, let's rollback!\n\n";
$caretaker->undo();

echo "\n";
$caretaker->showHistory();

echo "\nClient: Once more!\n\n";
$caretaker->undo();

echo "\n";
$caretaker->showHistory();

$caretaker->backup();
$originator->doOperation('DDD');

$caretaker->backup();
$originator->doOperation('EEE');

echo "\n";
$caretaker->showHistory();