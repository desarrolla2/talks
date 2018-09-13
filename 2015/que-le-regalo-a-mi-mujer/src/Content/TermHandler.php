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
 * TermHandler
 */
class TermHandler
{
    /**
     * @var array
     */
    protected $stopWords;

    /**
     * @var array
     */
    protected $synonyms;

    /**
     * @param array $stopWords
     */
    public function __construct(array $stopWords = [], array $synonyms = [])
    {
        $this->stopWords = $stopWords;
        $this->synonyms = $synonyms;
    }

    /**
     * @param $terms
     *
     * @return array
     */
    public function getUniqueTerms($terms)
    {
        return array_unique($terms, SORT_STRING);
    }

    /**
     * @param array $terms
     *
     * @return array
     */
    public function replace(array $terms)
    {
        $stopWords = $this->getStopWords();
        $synonyms = $this->getSynonyms();

        foreach ($terms as $key => $term) {
            if (in_array($term, $stopWords)) {
                unset($terms[$key]);
            }
            if (array_key_exists($term, $synonyms)) {
                $terms[$key] = $synonyms[$term];
            }
        }

        return $terms;
    }

    /**
     * @param string $source
     *
     * @return string
     */
    public function clean($source)
    {
        $source = strtolower($source);
        $source = preg_replace('/[\s\t\n]+/', ' ', $source);

        return preg_replace("/[^a-z0-9\s]/", '', $source);
    }

    /**
     * @param string $source
     *
     * @return array
     */
    public function explode($source)
    {
        return explode(' ', $source);
    }

    /**
     * @return array
     */
    public function getSynonyms()
    {
        return $this->synonyms;
    }

    /**
     * @return array
     */
    public function getStopWords()
    {
        return $this->stopWords;
    }
}
