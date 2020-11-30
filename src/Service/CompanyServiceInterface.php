<?php


namespace App\Service;


interface CompanyServiceInterface
{


    /**
     * @return mixed
     */
    public function programmer();

    /**
     * @return mixed
     */
    public function designer();

    /**
     * @return mixed
     */
    public function tester();

    /**
     * @return mixed
     */
    public function manager();

}