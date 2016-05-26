<?php

namespace Bez\TweetToHtml\Tests;

use Bez\TweetToHtml\TweetFormatter;

class FormatterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TweetFormatter
     */
    protected $formatter;

    public function setUp()
    {
        $this->formatter = new TweetFormatter();
    }

    public function testFormat()
    {
        $data = require __DIR__ . '/../test-data.php';

        $fh = fopen(__DIR__ . '/../tweets.html', 'w');

        foreach ($data['statuses'] as $t) {
            $formatted = $this->formatter->toHtml($t['text'], $t['entities']);
            $this->assertEquals(
                $t['formatted_text'],
                $formatted
            );

            fwrite($fh, $formatted);
            fwrite($fh, '<hr>');

        }

        fclose($fh);
    }

}
