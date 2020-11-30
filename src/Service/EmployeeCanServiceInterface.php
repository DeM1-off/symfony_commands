<?php


namespace App\Service;


interface EmployeeCanServiceInterface
{

    /**
     * @return mixed
     */
    public function programmer($can);

    /**
     * @return mixed
     */
    public function designer($can);

    /**
     * @return mixed
     */
    public function tester($can);

    /**
     * @return mixed
     */
    public function manager($can);

}