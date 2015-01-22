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
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Desarrolla2\RS\Content\TermFrequencyInverseDocumentFrequency;
use Desarrolla2\RS\Content\TermHandler;
use Desarrolla2\RS\Repository\AmazonRepository;
use Desarrolla2\RS\Repository\StopWordsRepository;
use Desarrolla2\RS\Score\Euclidean;
use Desarrolla2\RS\Score\Intersection;
use Desarrolla2\RS\SimilarityHandler;

class ContentBasedCommand extends Command
{
    protected function configure()
    {
        $this->setName('content:based')
            ->addOption(
                'similarity',
                null,
                InputOption::VALUE_NONE
            );
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $strategy = new TermFrequencyInverseDocumentFrequency(
            new TermHandler($this->getStopWords())
        );

        $termVectors = $strategy->calculate(
            $this->getDocuments()
        );

        if (!$input->getOption('similarity')) {
            $this->renderTerms($output, $termVectors);

            return;
        }

        $documentName = key($termVectors);
        $first = array_shift($termVectors);
        $handler = new SimilarityHandler();
        $scores = $handler->calculate(
            $first,
            $termVectors,
            new Euclidean()
        );

        $this->renderScores($output, $documentName, $scores);

        return;
    }

    /**
     * @param OutputInterface $output
     * @param strning         $documentName
     * @param array           $scores
     */
    protected function renderScores(OutputInterface $output, $documentName, $scores)
    {
        $table = $this->getHelper('table');
        $table->setHeaders(['Title', 'Score']);
        foreach ($scores as $key => $value) {
            $table->addRow(
                [$key, round($value, 3)]
            );
        }
        $output->writeln('');
        $output->writeln(sprintf('<info>%s</info>', $documentName));
        $table->render($output);
    }

    /**
     * @param OutputInterface $output
     * @param array           $result
     */
    protected function renderTerms(OutputInterface $output, $result)
    {
        $output->writeln('');
        foreach ($result as $document => $orderedValues) {
            $termsString = '';
            $items = array_slice($orderedValues, 0, 30, true);
            foreach ($items as $key => $value) {
                $termsString .= $key.' (<fg=red>'.round($value, 3).'</fg=red>), ';
            }
            $output->writeln(sprintf('<info>%s</info>', $document));
            $output->writeln(sprintf('%s', $termsString));
            $output->writeln('');
        }
    }

    /**
     * @return array
     */
    protected function getDocuments()
    {
        $repository = new AmazonRepository();

        return $repository->getBooks();
    }

    /**
     * @return array
     */
    protected function getStopWords()
    {
        $repository = new StopWordsRepository();

        return $repository->getAll();
    }
}
