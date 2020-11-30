<?php


namespace App\Command;

use App\Service\CompanyServiceInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CompanyEmployeeCommand extends Command
{

    private $companyService;

    /**
     * CompanyEmployeeCommand constructor.
     * @param CompanyServiceInterface $companyService
     * @param string|null $name
     */
    public function __construct(CompanyServiceInterface $companyService, string $name = null)
    {
        $this->companyService = $companyService;
        parent::__construct($name);
    }

    /**
     * company:employee
     */
    protected function configure()
    {
        $this
            ->setName('company:employee')
            ->setDescription('What are the employees in the company')
            ->addArgument('name', InputArgument::OPTIONAL, 'What kind of employee do you need')
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {


    $name = $input->getArgument('name');

        switch ($name)
        {
            case 'programmer':
                $this->companyService->programmer();
                break;
            case 'designer':
                $this->companyService->designer();
                break;
            case 'tester':
                $this->companyService->tester();
                break;
            case 'manager':
               $this->companyService->manager();
                break;
            default:
                $output->write('Wrong command');
        }


            return Command::SUCCESS;



    }
}