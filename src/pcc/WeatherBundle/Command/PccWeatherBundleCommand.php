<?php

namespace pcc\WeatherBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class PccWeatherBundleCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('pccWeatherBundle')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getArgument('argument');

        if ($input->getOption('option')) {
            // ...
        }

        if (null === $argument)
        {
            $argument = 'Alhama de Murcia';
        }
        $output->write($this->getContainer()->get('pcc_weather.weather_provider_api')->getCelsiusByCity($argument));
    }

}
