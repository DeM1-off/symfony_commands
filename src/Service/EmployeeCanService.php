<?php


namespace App\Service;

use App\Service\EmployeeCanServiceInterface;

class EmployeeCanService implements EmployeeCanServiceInterface
{

    /**
     * @param $can
     */
    public function programmer($can)
    {
        $os = array("testCode", "communicateWithTheManager","writeCode");
        if (in_array($can, $os)) {
            echo "true";
        }
        else{
            echo "false";
        }
    }

    /**
     * @param $can
     */
    public function designer($can)
    {
        $os = array("communicateWithTheManager", "paint");
        if (in_array($can, $os)) {
            echo "true";
        }
        else{
            echo "false";
        }
    }


    /**
     * @param $can
     */
    public function tester($can)
    {
        $os = array("setTasks", "communicateWithTheManager","testCode");
        if (in_array($can, $os)) {
            echo "true";
        }
        else{
            echo "false";
        }
    }


    /**
     * @param $can
     */
    public function manager($can)
    {
        $os = array("setTasks");
        if (in_array($can, $os)) {
            echo "true";
        }
        else{
            echo "false";
        }
    }

}