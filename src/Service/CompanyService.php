<?php


namespace App\Service;

use App\Service\CompanyServiceInterface;
use App\Service\CompanyTrait\ProgrammerTrait;
use App\Service\CompanyTrait\TesterTrait;
use App\Service\CompanyTrait\DesignerTrait;
use App\Service\CompanyTrait\ManagerTrait;

class CompanyService implements CompanyServiceInterface
{

    use ProgrammerTrait,ManagerTrait,DesignerTrait,TesterTrait;


}