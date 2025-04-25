<?php
namespace App\Repositories;

use finfo;
use function PHPUnit\Framework\returnArgument;
class CompanyRepository
{
    public function pluck()
    {
        return [
            1 => 'Company One',
            2 => 'Company Two',
        ];
    }
}