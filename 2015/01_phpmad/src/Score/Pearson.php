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
 * Pearson
 */
class Pearson implements ScoreInterface
{
    /**
     * @param array $set1
     * @param array $set2
     *
     * @return float
     */
    public function calculate(array $set1, array $set2)
    {
        $k = $this->sumProductMeanDeviation($set1, $set2);

        $smd1 = $this->sumSquareMeanDeviation($set1);
        $smd2 = $this->sumSquareMeanDeviation($set2);

        $correlation = $k / sqrt($smd1 * $smd2);

        return $correlation;
    }

    /**
     * @param array $set1
     * @param array $set2
     *
     * @return int
     */
    protected function sumProductMeanDeviation(array $set1, array $set2)
    {
        $sum = 0;

        foreach ($set1 as $key => $item) {
            $sum += $this->productMeanDeviation($set1, $set2, $key);
        }

        return $sum;
    }

    /**
     * @param array $set1
     * @param array $set2
     * @param int   $index
     *
     * @return mixed
     */
    protected function productMeanDeviation(array $set1, array $set2, $index)
    {
        return ($this->meanDeviation($set1, $index) * $this->meanDeviation($set2, $index));
    }

    /**
     * @param array $set
     *
     * @return int
     */
    protected function sumSquareMeanDeviation(array $set)
    {
        $sum = 0;

        foreach ($set as $key => $item) {
            $sum += $this->squareMeanDeviation($set, $key);
        }

        return $sum;
    }

    /**
     * @param array $set
     * @param int   $index
     *
     * @return mixed
     */
    protected function squareMeanDeviation(array $set, $index)
    {
        return pow($this->meanDeviation($set, $index), 2);
    }

    /**
     * @param array $set
     *
     * @return int
     */
    protected function sumMeanDeviation(array $set)
    {
        $sum = 0;

        foreach ($set as $key => $item) {
            $sum += $this->squareMeanDeviation($set, $key);
        }

        return $sum;
    }

    /**
     * @param array $set
     * @param int   $index
     *
     * @return mixed
     */
    protected function meanDeviation(array $set, $index)
    {
        $average = $this->average($set);

        return $set[$index] - $average;
    }

    /**
     * @param array $set
     *
     * @return float
     */
    protected function average(array $set)
    {
        $sum = $this->sum($set);
        $num = count($set);

        return $sum / $num;
    }

    /**
     * @param array $set
     *
     * @return number
     */
    protected function sum($set)
    {
        return array_sum($set);
    }
}
