<?php

interface ProfileIteratorInterface
{

    public function hasNext(): bool;

    public function getNext();


}