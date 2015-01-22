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

/**
 * Interface ScoreInterface
 */
interface ScoreInterface
{
    /**
     * @param $set1
     * @param $set2
     *
     * @return float
     */
    public function calculate(array $set1, array $set2);
}
