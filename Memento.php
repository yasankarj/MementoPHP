<?php

/**
 * Created by PhpStorm.
 * User: YasankaRJ
 * Date: 5/27/19
 * Time: 3:13 PM
 */

namespace MementoPHP;

/**
 * The Memento interface provides a way to retrieve the memento's metadata, such
 * as creation date or name. However, it doesn't expose the Originator's state.
 */
interface Memento
{
    public function getName();

    public function getDate();

}