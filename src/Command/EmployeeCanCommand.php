<?php


namespace App\Command;


use Symfony\Component\Console\Command\Command;
use App\Service\EmployeeCanServiceInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class EmployeeCanCommand extends Command
{
    private $employeeService;


    public function __construct(EmployeeCanServiceInterface $employeeService, string $name = null)
    {
        $this->employeeService = $employeeService;
        parent::__construct($name);
    }

    protected function configure()
    {
        $this
            ->setName('employee:can')
            ->setDescription('Find out what employees can')
            ->addArgument('name', InputArgument::OPTIONAL, 'Name employee')
            ->addArgument('can', InputArgument::OPTIONAL, 'Find out what employees can')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {


        $name = $input->getArgument('name');
        $can = $input->getArgument('can');

        switch ($name)
        {
            case 'programmer':
                $this->employeeService->programmer($can);
                break;
            case 'designer':
                $this->employeeService->designer($can);
                break;
            case 'tester':
                $this->employeeService->tester($can);
                break;
            case 'manager':
                $this->employeeService->manager($can);
                break;
            default:
                $output->write('Wrong command');
        }

        return Command::SUCCESS;



    }

}