<?php
namespace App\Models;
use DateTimeInterface;

trait ChangeDateFormatTrait
{
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y');
    }
}