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

namespace Desarrolla2\RS\Content;

/**
 * InverseDocumentFrequency
 */
class TermFrequencyInverseDocumentFrequency
{
    /**
     * @var TermHandler
     */
    protected $handler;

    /**
     * @param TermHandler $handler
     */
    public function __construct(TermHandler $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @param $documents
     *
     * @return array
     */
    public function calculate(array $documents)
    {
        $results = $disorderedResults = $data = [];
        $data['documents'] = $data['terms'] = [];
        $total = count($documents);

        foreach ($documents as $document => $content) {
            $data[$document] = [];

            /**
             * Remove a-z characters
             */
            $clean = $this->handler->clean($content);

            /**
             * Replace stop words, polisemy, synonyms
             * Create terms array
             */
            $terms = $this->handler->replace($this->handler->explode($clean));

            /**
             * Create unique terms array
             */
            $uniqueTerms = $this->handler->getUniqueTerms($terms);

            $data['documents'][$document]['terms'] = $terms;
            $data['terms'][$document] = $data['documents'][$document]['unique'] = $uniqueTerms;
        }

        /**
         *  Calculate DF
         */
        foreach ($documents as $document => $content) {
            $frequencies = $this->calculateFrequencies(
                $data['documents'][$document]['terms'],
                $data['documents'][$document]['unique']
            );
            $data['documents'][$document]['frequencies'] = $frequencies;
        }

        /**
         * Calculate IDF
         */
        foreach ($documents as $document => $content) {
            $disorderedResults[$document] = $data['documents'][$document]['inverse'] = [];

            foreach ($data['documents'][$document]['unique'] as $term) {
                $inverse = $this->calculateInverseDocumentFrequencies(
                    $term,
                    $total,
                    $data['terms']
                );
                $data[$document]['inverse'][$term] = $inverse;
                $disorderedResults[$document][$term] = $data['documents'][$document]['frequencies'][$term] * $inverse;
            }
        }

        /**
         * Order results
         */
        foreach ($disorderedResults as $document => $disorderedResult) {
            arsort($disorderedResult);
            $results[$document] = $disorderedResult;
        }

        return $results;
    }

    /**
     * @param $term
     * @param $total
     * @param $documents
     *
     * @return float
     */
    protected function calculateInverseDocumentFrequencies($term, $total, $documents)
    {
        $appears = 0;
        foreach ($documents as $document => $terms) {
            if (in_array($term, $terms)) {
                $appears++;
            }
        }

        return log($total / $appears);
    }

    /**
     * @param $terms
     * @param $uniqueTerms
     *
     * @return array
     */
    protected function calculateFrequencies($terms, $uniqueTerms)
    {
        $frequencies = [];
        foreach ($uniqueTerms as $uniqueTerm) {
            $frequencies[$uniqueTerm] = 0;
            foreach ($terms as $term) {
                if ($uniqueTerm == $term) {
                    $frequencies[$uniqueTerm]++;
                }
            }
        }

        arsort($frequencies, SORT_NUMERIC);
        $maxFrequency = array_values($frequencies)[0];

        foreach ($frequencies as $key => $value) {
            $frequencies[$key] = round($value / $maxFrequency, 3);
        }

        return $frequencies;
    }
}
