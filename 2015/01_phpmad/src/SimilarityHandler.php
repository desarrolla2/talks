<?php

/*
 * This file is part of the Recommender System package.
 *
 * Copyright (c) Daniel González
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Daniel González <daniel@desarrolla2.com>
 */

namespace Desarrolla2\RS;

use Desarrolla2\RS\Score\ScoreInterface;

/**
 * SimilarityHandler
 */
class SimilarityHandler
{
    /**
     * @param array          $set1
     * @param array          $sets
     * @param ScoreInterface $score
     * @param string         $order
     *
     * @return array
     */
    public function calculate($set1, $sets, ScoreInterface $score, $order = 'ASC', $limit = false)
    {
        $result = [];
        foreach ($sets as $key => $set2) {
            $result[$key] = $score->calculate($set1, $set2);
        }

        if ($order == 'DESC') {
            arsort($result);
        }

        if ($order == 'ASC') {
            asort($result);
        }

        if ($limit) {

            $result = array_slice($result, 0, $limit, true);
        }

        return $result;
    }
}
