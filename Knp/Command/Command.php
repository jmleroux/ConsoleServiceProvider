<?php

namespace Knp\Command;

use Silex\Application;
use Symfony\Component\Console\Command\Command as BaseCommand;

class Command extends BaseCommand
{
    /**
     * @return Application
     */
    public function getSilexApplication()
    {
        return $this->getApplication()->getSilexApplication();
    }

    /**
     * @return string
     */
    public function getProjectDirectory()
    {
        return $this->getApplication()->getProjectDirectory();
    }
}
