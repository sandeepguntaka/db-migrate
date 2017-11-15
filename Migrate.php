<?php

namespace DbMigrate;

use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Yaml\Yaml;

/**
 * Created by PhpStorm.
 * User: sandeep
 * Date: 14/11/17
 * Time: 5:00 PM
 */
class Migrate {

  public function handle(ArgvInput $input) {
    try {
      if (!$input->hasParameterOption('--to')) {
        throw new \Exception('No target found');
      }
      if (!$input->hasParameterOption('--from')) {
        throw new \Exception('No source found');
      }

//    print_r($input->getParameterOption('--to',FALSE,TRUE));
//    exit(1);
      return new ConsoleOutput();
    } catch (\Exception $exception) {
      $output = new ConsoleOutput;
      $style = new OutputFormatterStyle('red', NULL, array('bold'));
      $output->getFormatter()->setStyle('fire', $style);

      $output->writeln('<fire>' . $exception->getMessage() . '</fire>');
    }
  }

}
