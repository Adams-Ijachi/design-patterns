<?php


interface ValidationInterface
{

    public function getValidationMethod(string $validationMethod): ValidationMethodInterface;
}