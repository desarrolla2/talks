<?php
#!/usr/bin/env php
/*
 * This file is part of the marvel package.
 *
 * (c) Daniel González <daniel@desarrolla2.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
require 'vendor/autoload.php';

use Symfony\Component\Console\Application;

$app = new Application();
$app->add(new \Desarrolla2\RS\Command\ContentBasedCommand());
$app->add(new \Desarrolla2\RS\Command\CollaborativeFilteringCommand());
$app->add(new \Desarrolla2\RS\Command\CollaborativeFilteringMarvelCommand());

$app->run();