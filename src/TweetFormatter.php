<?php

namespace Bez\TweetToHtml;

class TweetFormatter
{
    public function __construct()
    {
        $this->replacementFunctions = [
            'hashtags' => [$this, 'formatHashtag'],
            'media' => [$this, 'formatMedia'],
            'urls' => [$this, 'formatUrl'],
            'user_mentions' => [$this, 'formatUserMention'],
        ];
    }

    public function toHtml($text, array $entities)
    {

        $sorted = array();

        // Make sure `$text` is in UTF-8...
        if (mb_detect_encoding($text, 'UTF-8', true) == false) {
            $text = mb_convert_encoding($text, 'UTF-8');
        }

        foreach ($this->replacementFunctions as $entityType => $callable) {
            if (isset($entities[$entityType]) && is_array($entities[$entityType])) {
                $sorted = array_merge($sorted, array_map(function ($e) use ($callable, $entityType) {
                    return [
                        'start' => $e['indices'][0],
                        'end' => $e['indices'][1],
                        'type' => $entityType,
                        'replacement_func' => $callable,
                        'data' => $e
                    ];
                }, $entities[$entityType]));
            }
        }

        usort($sorted, function ($a, $b) {
            return $b['start'] - $a['start'];
        });

        foreach ($sorted as $key =>  $entity) {
            $nearest = self::nearestNonWhitespace($text, $entity['start']);

            $text = mb_substr($text, 0, $nearest, 'UTF-8') 
                . call_user_func($entity['replacement_func'], $entity['data']) 
                . mb_substr($text, $entity['end'], null, 'UTF-8');

        }

        return $text;


    }

    public static function nearestNonWhitespace($text, $index) {

        do {
            $index--;
            $check = mb_substr($text, $index, 1, 'UTF-8');
        } while ($index > -1 && !preg_match('/\s/u', $check));

        return $index + 1;
    }

    protected function formatHashtag($e) 
    {
        return sprintf('<a href="https://twitter.com/hashtag/%s">#%s</a>', $e['text'], $e['text']);
    }

    protected function formatMedia($e) 
    {
        return sprintf('<a href="%s">%s</a>', $e['media_url_https'], $e['url']);
    }

    protected function formatUrl($e)
    {
        return sprintf('<a href="%s">%s</a>', $e['url'], $e['url']);
    }

    protected function formatUserMention($e)
    {
        return sprintf('<a href="https://twitter.com/%s">@%s</a>', $e['screen_name'], $e['screen_name']);
    }

}
