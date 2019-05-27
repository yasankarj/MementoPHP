<?php
/**
 * Created by PhpStorm.
 * User: YasankaRJ
 * Date: 5/27/19
 * Time: 3:15 PM
 */

namespace MementoPHP;

include_once  'Caretaker.php';

use MementoPHP\Memento as Memento;
/**
 * The Concrete Memento contains the infrastructure for storing the Originator's
 * state.
 */
class ConcreteMemento implements Memento
{

    private $state;

    private $date;

    public function __construct(string $state)
    {
        $this->state = $state;
        $this->date = date('Y-m-d H:i:s');
    }

    /**
     * The Originator uses this method when restoring its state.
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The rest of the methods are used by the Caretaker to display metadata.
     */
    public function getName()
    {
        return $this->date . " / (" . substr($this->state, 0, 9) . "";
    }

    public function getDate()
    {
        return $this->date;
    }
}