<?php

/**
 * Created by PhpStorm.
 * User: YasankaRJ
 * Date: 5/27/19
 * Time: 3:21 PM
 */

namespace MementoPHP;
include_once  'Memento.php';
include_once  'ConcreteMemento.php';

use MementoPHP\Memento as Memento;
use MementoPHP\ConcreteMemento as ConcreteMemento;

/**
 * The Originator holds some important state that may change over time. It also
 * defines a method for saving the state inside a memento and another method for
 * restoring the state from it.
 */
class Originator
{
    /**
     * @var string For the sake of simplicity, the originator's state is stored
     * inside a single variable.
     */
    private $state;

    public function __construct(string $state)
    {
        $this->state = $state;
        echo "Originator: My initial state is: {$this->state}\n";
    }

    /**
     * The Originator's business logic may affect its internal state. Therefore,
     * the client should backup the state before launching methods of the
     * business logic via the save() method.
     */
    public function doOperation($line)
    {
        echo "Originator: Taking input from the user\n";
        $this->state = $this->getUserInput($line);
        echo "Originator: and my state has changed to: {$this->state}\n";
    }

    private function getUserInput($line)
    {
        return $line;
    }

    /**
     * Saves the current state inside a memento.
     */
    public function save()
    {
        return new ConcreteMemento($this->state);
    }

    /**
     * Restores the Originator's state from a memento object.
     */
    public function restore(Memento $memento)
    {
        $this->state = $memento->getState();
        echo "Originator: My state has changed to: {$this->state}\n";
    }
}