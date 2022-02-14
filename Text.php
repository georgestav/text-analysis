<?php

/**
 * PHP version 8.1.2
 *
 * @category Class
 * @package  Text_Analysis
 * @author   George Stavroulakis <g.stavroulakis@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     georgestav.dev
 */

/**
 * Text
 * 
 * @category Class
 * @package  Text_Analysis
 * @author   George Stavroulakis <g.stavroulakis@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     georgestav.dev
 */
class Text
{
    public $text = null;
    public $total_length = null;
    public $nr_of_words = null;
    public $nr_of_sentences = null;
    public $nr_of_paragraphs = null;
    public $most_common_words = [];

    /**
     * Constructor function writing the passed text
     *
     * @param mixed $text 
     * 
     * @return void
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * Returns the length of inputed text, spaces included
     *
     * @return integer
     */
    public function totalLength()
    {
        return $this->total_length = strlen($this->text);
    }

    /**
     * Returns total number of words of inputed text
     *
     * @return integer
     */
    public function numberOfWords()
    {
        return $this->nr_of_words = str_word_count($this->text);
    }

    /**
     * Returns total number of sentences of inputed text
     *
     * @return integer
     */
    public function numberOfSentences()
    {
        return $this->nr_of_sentences =  count(explode(".", $this->text)) - 1;
    }

    /**
     * Returns total number of paragraphs of inputed text
     *
     * @return integer
     */
    public function numberOfParagraphs()
    {
        return $this->nr_of_paragraphs =  count(explode("\n", $this->text));
    }

    /**
     * Returns 10 most common words of inputed text
     *
     * @return string
     */
    public function mostCommonWords()
    {
        $words = str_word_count($this->text, 1);
        $frequence = [];
        foreach ($words as $word) {
            if (array_key_exists($word, $frequence)) {
                $frequence[$word] += 1;
            } else {
                $frequence[strtolower($word)] = 1;
            }
        }
        arsort($frequence);
        $output = array_slice($frequence, 0, 10);
        $output = implode(', ', array_keys($output));
        return $output;
    }
}
