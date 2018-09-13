<?php

/*
 * This code is a  example to php madrid meeting group talk
 * on January 2015.
 *
 * Please do not take this as production code
 *
 * Copyright (c) Daniel González
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Daniel González <daniel@desarrolla2.com>
 */

namespace Desarrolla2\RS\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Desarrolla2\RS\Score\Pearson;
use Desarrolla2\RS\SimilarityHandler;

class CollaborativeFilteringCommand extends Command
{
    protected function configure()
    {
        $this->setName('collaborative:filtering');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $data = [
            'user 1' => [
                'Learning PHP' => 5,
                'PHP Web Services' => 6,
                'Pragmatic Programmer' => 7,
                'Head First ' => 9
            ],
            'user 2' => [
                'Learning PHP' => 7,
                'PHP Web Services' => 4,
                'Pragmatic Programmer' => 2,
                'Head First ' => 6
            ],
            'user 3' => [
                'Learning PHP' => 1,
                'PHP Web Services' => 3,
                'Pragmatic Programmer' => 6,
                'Head First ' => 3
            ],
            'user 4' => [
                'Learning PHP' => 1,
                'PHP Web Services' => 2,
                'Pragmatic Programmer' => 3,
                'Head First ' => 5
            ],
        ];

        $user1 = array_shift($data);
        $handler = new SimilarityHandler();
        $scores = $handler->calculate(
            $user1,
            $data,
            new Pearson(),
            'DESC'
        );

        $this->renderScores($output, 'user 1', $scores);
    }

    /**
     * @param OutputInterface $output
     * @param string          $userName
     * @param array           $scores
     */
    protected function renderScores(OutputInterface $output, $userName, $scores)
    {
        $table = $this->getHelper('table');
        $table->setHeaders(['Title', 'Score']);
        foreach ($scores as $key => $value) {
            $table->addRow(
                [$key, round($value, 3)]
            );
        }
        $output->writeln('');
        $output->writeln(sprintf('<info>%s</info>', $userName));
        $table->render($output);
    }
}
