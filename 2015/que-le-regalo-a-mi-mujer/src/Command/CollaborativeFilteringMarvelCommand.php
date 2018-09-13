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

use Desarrolla2\RS\Repository\MarvelCharactersRepository;
use Desarrolla2\RS\Repository\MarvelSeriesRepository;
use Desarrolla2\RS\Score\Intersection;
use Desarrolla2\RS\Score\Jaccard;
use Desarrolla2\RS\SimilarityHandler;

/**
 * CollaborativeFilteringMarvelCommand
 */
class CollaborativeFilteringMarvelCommand extends Command
{
    /**
     * @var int
     */
    protected $userId = 1009718;

    protected function configure()
    {
        $this->setName('collaborative:filtering:marvel');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $characters = $this->getCharacters();
        $user = $this->getUser();

        $handler = new SimilarityHandler();
        $scores = $handler->calculate(
            $user,
            $characters,
            new Jaccard(),
            'DESC',
            20
        );

        $this->renderScores($output, $scores);
    }

    /**
     * @param OutputInterface $output
     * @param array           $scores
     */
    protected function renderScores(OutputInterface $output, $scores)
    {
        $charactersRepository = new MarvelCharactersRepository();
        $user = $charactersRepository->getCharacter($this->userId);

        $table = $this->getHelper('table');
        $table->setHeaders(['User', 'Score', 'Series']);

        arsort($user['series']);
        $table->addRow(

            [$user['name'], '-', implode(', ', $user['series'])]
        );
        foreach ($scores as $key => $value) {
            $related = $charactersRepository->getCharacter($key);
            arsort($related['series']);
            foreach ($related['series'] as $key => $serie) {
                if (in_array($serie, $user['series'])) {
                    $related['series'][$key] = '<comment>'.$serie.'</comment>';
                }
            }
            $table->addRow(
                [$related['name'], $value, implode(', ', $related['series'])]
            );
        }
        $table->render($output);
    }

    /**
     * @return array
     */
    protected function getCharacters()
    {
        $data = [];
        $repository = new MarvelCharactersRepository();
        $items = $repository->getCharacters();

        foreach ($items as $id => $item) {
            if ($id == $this->userId) {
                continue;
            }
            $data[$id] = [];
            foreach ($item['series'] as $serieId) {
                $data[$id][$serieId] = 1;
            }
        }

        return $data;
    }

    /**
     * @return array|false
     */
    protected function getUser()
    {
        $data = [];
        $repository = new MarvelCharactersRepository();
        $item = $repository->getCharacter($this->userId);

        foreach ($item['series'] as $serie) {
            $data[$serie] = 1;
        }

        return $data;
    }
}
