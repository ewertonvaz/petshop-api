<?php
namespace App\Models\v1;
use DateTimeInterface;

trait ChangeDateFormatTrait
{
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y');
    }
}