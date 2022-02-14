<?php

/**
 * PHP version 8.1.2
 *
 * @category General
 * @package  Text_Analysis
 * @author   George Stavroulakis <g.stavroulakis@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     georgestav.dev
 */

require_once 'Text.php';

$text = new Text(
    'Once, Aunt he Petunia, tired. 
    of Harry he as coming back.He he he Once 
    from the barbers as looking as though he.'
);


echo $text->totalLength();
echo '</br>';

echo $text->numberOfWords();
echo '</br>';

echo $text->numberOfSentences();
echo '</br>';

echo $text->numberOfParagraphs();
echo '</br>';

echo $text->mostCommonWords();
