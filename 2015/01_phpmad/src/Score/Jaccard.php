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

namespace Desarrolla2\RS\Score;

class Jaccard implements ScoreInterface
{
    /**
     * @param array $set1
     * @param array $set2
     *
     * @return float|int
     */
    public function calculate(array $set1, array $set2)
    {
        $intersection = array_intersect_key($set1, $set2);
        $countIntersection = count($intersection);
        if (!$countIntersection) {
            return 0;
        }
        $union = array_merge($set1, $set2);
        $countUnion = count($union);
        if (!count($union)) {
            return 0;
        }

        return $countIntersection / $countUnion;
    }
}
