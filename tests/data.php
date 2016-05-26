<?php

// https://api.twitter.com/1.1/search/tweets.json?result_type=recent&q=%23symfony%20-RT&count=5
return array (
  'statuses' => 
  array (
    0 => 
    array (
      'created_at' => 'Thu May 26 17:19:24 +0000 2016',
      'id' => 735883042800164864,
      'id_str' => '735883042800164864',
      'text' => 'C\'est parti ! On parle json web token #jwt pour commencer #symfony #informatique @mediapart #sfpot https://t.co/TxGcNjCl3y',
      'truncated' => false,
      'entities' => 
      array (
        'hashtags' => 
        array (
          0 => 
          array (
            'text' => 'jwt',
            'indices' => 
            array (
              0 => 38,
              1 => 42,
            ),
          ),
          1 => 
          array (
            'text' => 'symfony',
            'indices' => 
            array (
              0 => 58,
              1 => 66,
            ),
          ),
          2 => 
          array (
            'text' => 'informatique',
            'indices' => 
            array (
              0 => 67,
              1 => 80,
            ),
          ),
          3 => 
          array (
            'text' => 'sfpot',
            'indices' => 
            array (
              0 => 92,
              1 => 98,
            ),
          ),
        ),
        'symbols' => 
        array (
        ),
        'user_mentions' => 
        array (
          0 => 
          array (
            'screen_name' => 'mediapart',
            'name' => 'Mediapart',
            'id' => 19976004,
            'id_str' => '19976004',
            'indices' => 
            array (
              0 => 81,
              1 => 91,
            ),
          ),
        ),
        'urls' => 
        array (
        ),
        'media' => 
        array (
          0 => 
          array (
            'id' => 735883031261634560,
            'id_str' => '735883031261634560',
            'indices' => 
            array (
              0 => 99,
              1 => 122,
            ),
            'media_url' => 'http://pbs.twimg.com/media/CjZht9KWYAA4oTD.jpg',
            'media_url_https' => 'https://pbs.twimg.com/media/CjZht9KWYAA4oTD.jpg',
            'url' => 'https://t.co/TxGcNjCl3y',
            'display_url' => 'pic.twitter.com/TxGcNjCl3y',
            'expanded_url' => 'http://twitter.com/Externatic/status/735883042800164864/photo/1',
            'type' => 'photo',
            'sizes' => 
            array (
              'large' => 
              array (
                'w' => 1024,
                'h' => 768,
                'resize' => 'fit',
              ),
              'medium' => 
              array (
                'w' => 600,
                'h' => 450,
                'resize' => 'fit',
              ),
              'thumb' => 
              array (
                'w' => 150,
                'h' => 150,
                'resize' => 'crop',
              ),
              'small' => 
              array (
                'w' => 340,
                'h' => 255,
                'resize' => 'fit',
              ),
            ),
          ),
        ),
      ),
      'metadata' => 
      array (
        'iso_language_code' => 'fr',
        'result_type' => 'recent',
      ),
      'source' => '<a href="http://twitter.com/download/iphone" rel="nofollow">Twitter for iPhone</a>',
      'in_reply_to_status_id' => NULL,
      'in_reply_to_status_id_str' => NULL,
      'in_reply_to_user_id' => NULL,
      'in_reply_to_user_id_str' => NULL,
      'in_reply_to_screen_name' => NULL,
      'user' => 
      array (
        'id' => 341999384,
        'id_str' => '341999384',
        'name' => 'EXTERNATIC',
        'screen_name' => 'Externatic',
        'location' => 'Nantes, Pays de la Loire',
        'description' => 'Cabinet de #recrutement dédié au secteur de l\'#informatique du #web et #mobile. Vous êtes un profil #IT ? RDV avec nos clients 100% finaux !',
        'url' => 'http://t.co/jiXLptjYHL',
        'entities' => 
        array (
          'url' => 
          array (
            'urls' => 
            array (
              0 => 
              array (
                'url' => 'http://t.co/jiXLptjYHL',
                'expanded_url' => 'http://www.externatic.fr',
                'display_url' => 'externatic.fr',
                'indices' => 
                array (
                  0 => 0,
                  1 => 22,
                ),
              ),
            ),
          ),
          'description' => 
          array (
            'urls' => 
            array (
            ),
          ),
        ),
        'protected' => false,
        'followers_count' => 636,
        'friends_count' => 464,
        'listed_count' => 197,
        'created_at' => 'Mon Jul 25 09:22:52 +0000 2011',
        'favourites_count' => 1775,
        'utc_offset' => 7200,
        'time_zone' => 'Paris',
        'geo_enabled' => true,
        'verified' => false,
        'statuses_count' => 729,
        'lang' => 'fr',
        'contributors_enabled' => false,
        'is_translator' => false,
        'is_translation_enabled' => false,
        'profile_background_color' => '9E4467',
        'profile_background_image_url' => 'http://pbs.twimg.com/profile_background_images/555228329/1_externatic_logo_HD_3_1cm.png',
        'profile_background_image_url_https' => 'https://pbs.twimg.com/profile_background_images/555228329/1_externatic_logo_HD_3_1cm.png',
        'profile_background_tile' => false,
        'profile_image_url' => 'http://pbs.twimg.com/profile_images/2229323922/photo_normal.jpg',
        'profile_image_url_https' => 'https://pbs.twimg.com/profile_images/2229323922/photo_normal.jpg',
        'profile_banner_url' => 'https://pbs.twimg.com/profile_banners/341999384/1463668714',
        'profile_link_color' => '611730',
        'profile_sidebar_border_color' => 'DBE9ED',
        'profile_sidebar_fill_color' => 'E6F6F9',
        'profile_text_color' => '333333',
        'profile_use_background_image' => true,
        'has_extended_profile' => false,
        'default_profile' => false,
        'default_profile_image' => false,
        'following' => NULL,
        'follow_request_sent' => NULL,
        'notifications' => NULL,
      ),
      'geo' => NULL,
      'coordinates' => NULL,
      'place' => NULL,
      'contributors' => NULL,
      'is_quote_status' => false,
      'retweet_count' => 2,
      'favorite_count' => 3,
      'favorited' => false,
      'retweeted' => false,
      'possibly_sensitive' => false,
      'lang' => 'fr',
    ),
    1 => 
    array (
      'created_at' => 'Thu May 26 16:49:39 +0000 2016',
      'id' => 735875558538612736,
      'id_str' => '735875558538612736',
      'text' => '#symfonycz dnes na půl venku #symfonisti #symfony #cnd77 https://t.co/3BwAa1Ck2H',
      'truncated' => false,
      'entities' => 
      array (
        'hashtags' => 
        array (
          0 => 
          array (
            'text' => 'symfonycz',
            'indices' => 
            array (
              0 => 0,
              1 => 10,
            ),
          ),
          1 => 
          array (
            'text' => 'symfonisti',
            'indices' => 
            array (
              0 => 29,
              1 => 40,
            ),
          ),
          2 => 
          array (
            'text' => 'symfony',
            'indices' => 
            array (
              0 => 41,
              1 => 49,
            ),
          ),
          3 => 
          array (
            'text' => 'cnd77',
            'indices' => 
            array (
              0 => 50,
              1 => 56,
            ),
          ),
        ),
        'symbols' => 
        array (
        ),
        'user_mentions' => 
        array (
        ),
        'urls' => 
        array (
        ),
        'media' => 
        array (
          0 => 
          array (
            'id' => 735875537587949568,
            'id_str' => '735875537587949568',
            'indices' => 
            array (
              0 => 57,
              1 => 80,
            ),
            'media_url' => 'http://pbs.twimg.com/media/CjZa5xDUUAACyOt.jpg',
            'media_url_https' => 'https://pbs.twimg.com/media/CjZa5xDUUAACyOt.jpg',
            'url' => 'https://t.co/3BwAa1Ck2H',
            'display_url' => 'pic.twitter.com/3BwAa1Ck2H',
            'expanded_url' => 'http://twitter.com/PatrikVotocek/status/735875558538612736/photo/1',
            'type' => 'photo',
            'sizes' => 
            array (
              'thumb' => 
              array (
                'w' => 150,
                'h' => 150,
                'resize' => 'crop',
              ),
              'small' => 
              array (
                'w' => 340,
                'h' => 255,
                'resize' => 'fit',
              ),
              'medium' => 
              array (
                'w' => 600,
                'h' => 450,
                'resize' => 'fit',
              ),
              'large' => 
              array (
                'w' => 1024,
                'h' => 768,
                'resize' => 'fit',
              ),
            ),
          ),
        ),
      ),
      'metadata' => 
      array (
        'iso_language_code' => 'und',
        'result_type' => 'recent',
      ),
      'source' => '<a href="http://twitter.com/download/iphone" rel="nofollow">Twitter for iPhone</a>',
      'in_reply_to_status_id' => NULL,
      'in_reply_to_status_id_str' => NULL,
      'in_reply_to_user_id' => NULL,
      'in_reply_to_user_id_str' => NULL,
      'in_reply_to_screen_name' => NULL,
      'user' => 
      array (
        'id' => 16411991,
        'id_str' => '16411991',
        'name' => 'Patrik Votoček',
        'screen_name' => 'PatrikVotocek',
        'location' => 'Czech Republic',
        'description' => 'Crazy #PHP guy. Currently working as Lead PHP #Developer and #DevOps guy at @Shipito.',
        'url' => 'http://t.co/y4nM4aVLZN',
        'entities' => 
        array (
          'url' => 
          array (
            'urls' => 
            array (
              0 => 
              array (
                'url' => 'http://t.co/y4nM4aVLZN',
                'expanded_url' => 'http://patrik.votocek.cz',
                'display_url' => 'patrik.votocek.cz',
                'indices' => 
                array (
                  0 => 0,
                  1 => 22,
                ),
              ),
            ),
          ),
          'description' => 
          array (
            'urls' => 
            array (
            ),
          ),
        ),
        'protected' => false,
        'followers_count' => 1133,
        'friends_count' => 129,
        'listed_count' => 74,
        'created_at' => 'Mon Sep 22 23:31:12 +0000 2008',
        'favourites_count' => 3645,
        'utc_offset' => 7200,
        'time_zone' => 'Prague',
        'geo_enabled' => true,
        'verified' => false,
        'statuses_count' => 9440,
        'lang' => 'cs',
        'contributors_enabled' => false,
        'is_translator' => false,
        'is_translation_enabled' => false,
        'profile_background_color' => '000000',
        'profile_background_image_url' => 'http://pbs.twimg.com/profile_background_images/8709922/bg_twitter.jpg',
        'profile_background_image_url_https' => 'https://pbs.twimg.com/profile_background_images/8709922/bg_twitter.jpg',
        'profile_background_tile' => false,
        'profile_image_url' => 'http://pbs.twimg.com/profile_images/1883108019/avatar_normal.png',
        'profile_image_url_https' => 'https://pbs.twimg.com/profile_images/1883108019/avatar_normal.png',
        'profile_banner_url' => 'https://pbs.twimg.com/profile_banners/16411991/1348454696',
        'profile_link_color' => '2FC2EF',
        'profile_sidebar_border_color' => '000000',
        'profile_sidebar_fill_color' => '252429',
        'profile_text_color' => '666666',
        'profile_use_background_image' => true,
        'has_extended_profile' => false,
        'default_profile' => false,
        'default_profile_image' => false,
        'following' => NULL,
        'follow_request_sent' => NULL,
        'notifications' => NULL,
      ),
      'geo' => NULL,
      'coordinates' => NULL,
      'place' => NULL,
      'contributors' => NULL,
      'is_quote_status' => false,
      'retweet_count' => 1,
      'favorite_count' => 2,
      'favorited' => false,
      'retweeted' => false,
      'possibly_sensitive' => false,
      'lang' => 'und',
    ),
    2 => 
    array (
      'created_at' => 'Thu May 26 16:31:14 +0000 2016',
      'id' => 735870921873969153,
      'id_str' => '735870921873969153',
      'text' => '8. sraz přátel Symfony v Praze pomalu startuje! Dnes v @CDN77com a živě. :)

https://t.co/UggdOGRNw8

#symfony #symfonycz #SymfonyLive',
      'truncated' => false,
      'entities' => 
      array (
        'hashtags' => 
        array (
          0 => 
          array (
            'text' => 'symfony',
            'indices' => 
            array (
              0 => 102,
              1 => 110,
            ),
          ),
          1 => 
          array (
            'text' => 'symfonycz',
            'indices' => 
            array (
              0 => 111,
              1 => 121,
            ),
          ),
          2 => 
          array (
            'text' => 'SymfonyLive',
            'indices' => 
            array (
              0 => 122,
              1 => 134,
            ),
          ),
        ),
        'symbols' => 
        array (
        ),
        'user_mentions' => 
        array (
          0 => 
          array (
            'screen_name' => 'CDN77com',
            'name' => 'CDN77.com',
            'id' => 492106051,
            'id_str' => '492106051',
            'indices' => 
            array (
              0 => 55,
              1 => 64,
            ),
          ),
        ),
        'urls' => 
        array (
          0 => 
          array (
            'url' => 'https://t.co/UggdOGRNw8',
            'expanded_url' => 'http://www.youtube.com/c/symfonisti/live',
            'display_url' => 'youtube.com/c/symfonisti/l…',
            'indices' => 
            array (
              0 => 77,
              1 => 100,
            ),
          ),
        ),
      ),
      'metadata' => 
      array (
        'iso_language_code' => 'und',
        'result_type' => 'recent',
      ),
      'source' => '<a href="https://about.twitter.com/products/tweetdeck" rel="nofollow">TweetDeck</a>',
      'in_reply_to_status_id' => NULL,
      'in_reply_to_status_id_str' => NULL,
      'in_reply_to_user_id' => NULL,
      'in_reply_to_user_id_str' => NULL,
      'in_reply_to_screen_name' => NULL,
      'user' => 
      array (
        'id' => 3309090742,
        'id_str' => '3309090742',
        'name' => 'Symfonisti',
        'screen_name' => 'Symfonisti',
        'location' => 'Česká republika',
        'description' => 'Hezky česky o Symfony!
#symfonycz',
        'url' => 'http://t.co/j3hhXeVJQq',
        'entities' => 
        array (
          'url' => 
          array (
            'urls' => 
            array (
              0 => 
              array (
                'url' => 'http://t.co/j3hhXeVJQq',
                'expanded_url' => 'http://www.symfony.cz',
                'display_url' => 'symfony.cz',
                'indices' => 
                array (
                  0 => 0,
                  1 => 22,
                ),
              ),
            ),
          ),
          'description' => 
          array (
            'urls' => 
            array (
            ),
          ),
        ),
        'protected' => false,
        'followers_count' => 381,
        'friends_count' => 18,
        'listed_count' => 17,
        'created_at' => 'Fri Jun 05 07:50:11 +0000 2015',
        'favourites_count' => 103,
        'utc_offset' => -25200,
        'time_zone' => 'Pacific Time (US & Canada)',
        'geo_enabled' => false,
        'verified' => false,
        'statuses_count' => 449,
        'lang' => 'en-gb',
        'contributors_enabled' => false,
        'is_translator' => false,
        'is_translation_enabled' => false,
        'profile_background_color' => '000000',
        'profile_background_image_url' => 'http://abs.twimg.com/images/themes/theme1/bg.png',
        'profile_background_image_url_https' => 'https://abs.twimg.com/images/themes/theme1/bg.png',
        'profile_background_tile' => false,
        'profile_image_url' => 'http://pbs.twimg.com/profile_images/606730131063865344/PTzYvPcD_normal.png',
        'profile_image_url_https' => 'https://pbs.twimg.com/profile_images/606730131063865344/PTzYvPcD_normal.png',
        'profile_banner_url' => 'https://pbs.twimg.com/profile_banners/3309090742/1433497744',
        'profile_link_color' => '000000',
        'profile_sidebar_border_color' => '000000',
        'profile_sidebar_fill_color' => '000000',
        'profile_text_color' => '000000',
        'profile_use_background_image' => false,
        'has_extended_profile' => false,
        'default_profile' => false,
        'default_profile_image' => false,
        'following' => NULL,
        'follow_request_sent' => NULL,
        'notifications' => NULL,
      ),
      'geo' => NULL,
      'coordinates' => NULL,
      'place' => NULL,
      'contributors' => NULL,
      'is_quote_status' => false,
      'retweet_count' => 4,
      'favorite_count' => 2,
      'favorited' => false,
      'retweeted' => false,
      'possibly_sensitive' => false,
      'lang' => 'und',
    ),
    3 => 
    array (
      'created_at' => 'Thu May 26 16:00:15 +0000 2016',
      'id' => 735863124268486656,
      'id_str' => '735863124268486656',
      'text' => 'GOT A TALK IDEA? SHARE IT! #callforpapers #php #joomla #wordpress #ibmi #opensource #magento #devops #symfony

https://t.co/wdq6TIEvCG',
      'truncated' => false,
      'entities' => 
      array (
        'hashtags' => 
        array (
          0 => 
          array (
            'text' => 'callforpapers',
            'indices' => 
            array (
              0 => 27,
              1 => 41,
            ),
          ),
          1 => 
          array (
            'text' => 'php',
            'indices' => 
            array (
              0 => 42,
              1 => 46,
            ),
          ),
          2 => 
          array (
            'text' => 'joomla',
            'indices' => 
            array (
              0 => 47,
              1 => 54,
            ),
          ),
          3 => 
          array (
            'text' => 'wordpress',
            'indices' => 
            array (
              0 => 55,
              1 => 65,
            ),
          ),
          4 => 
          array (
            'text' => 'ibmi',
            'indices' => 
            array (
              0 => 66,
              1 => 71,
            ),
          ),
          5 => 
          array (
            'text' => 'opensource',
            'indices' => 
            array (
              0 => 72,
              1 => 83,
            ),
          ),
          6 => 
          array (
            'text' => 'magento',
            'indices' => 
            array (
              0 => 84,
              1 => 92,
            ),
          ),
          7 => 
          array (
            'text' => 'devops',
            'indices' => 
            array (
              0 => 93,
              1 => 100,
            ),
          ),
          8 => 
          array (
            'text' => 'symfony',
            'indices' => 
            array (
              0 => 101,
              1 => 109,
            ),
          ),
        ),
        'symbols' => 
        array (
        ),
        'user_mentions' => 
        array (
        ),
        'urls' => 
        array (
          0 => 
          array (
            'url' => 'https://t.co/wdq6TIEvCG',
            'expanded_url' => 'http://cfp.zendcon.com/',
            'display_url' => 'cfp.zendcon.com',
            'indices' => 
            array (
              0 => 111,
              1 => 134,
            ),
          ),
        ),
      ),
      'metadata' => 
      array (
        'iso_language_code' => 'en',
        'result_type' => 'recent',
      ),
      'source' => '<a href="http://sproutsocial.com" rel="nofollow">Sprout Social</a>',
      'in_reply_to_status_id' => NULL,
      'in_reply_to_status_id_str' => NULL,
      'in_reply_to_user_id' => NULL,
      'in_reply_to_user_id_str' => NULL,
      'in_reply_to_screen_name' => NULL,
      'user' => 
      array (
        'id' => 8854172,
        'id_str' => '8854172',
        'name' => 'ZendCon',
        'screen_name' => 'zendcon',
        'location' => 'Las Vegas, NV, US',
        'description' => 'This year promises to be the best ZendCon ever! With an exhibit hall, some great parties, and oodles of excellent PHP and OSS content!',
        'url' => 'http://t.co/PaCzzUu5Bd',
        'entities' => 
        array (
          'url' => 
          array (
            'urls' => 
            array (
              0 => 
              array (
                'url' => 'http://t.co/PaCzzUu5Bd',
                'expanded_url' => 'http://zendcon.com/',
                'display_url' => 'zendcon.com',
                'indices' => 
                array (
                  0 => 0,
                  1 => 22,
                ),
              ),
            ),
          ),
          'description' => 
          array (
            'urls' => 
            array (
            ),
          ),
        ),
        'protected' => false,
        'followers_count' => 6798,
        'friends_count' => 658,
        'listed_count' => 305,
        'created_at' => 'Thu Sep 13 13:53:27 +0000 2007',
        'favourites_count' => 258,
        'utc_offset' => -14400,
        'time_zone' => 'Eastern Time (US & Canada)',
        'geo_enabled' => false,
        'verified' => false,
        'statuses_count' => 2286,
        'lang' => 'en',
        'contributors_enabled' => false,
        'is_translator' => false,
        'is_translation_enabled' => false,
        'profile_background_color' => '9AE4E8',
        'profile_background_image_url' => 'http://pbs.twimg.com/profile_background_images/462270608139513856/P5WsmfxJ.jpeg',
        'profile_background_image_url_https' => 'https://pbs.twimg.com/profile_background_images/462270608139513856/P5WsmfxJ.jpeg',
        'profile_background_tile' => false,
        'profile_image_url' => 'http://pbs.twimg.com/profile_images/723202157936168960/ZkHRO2Lm_normal.jpg',
        'profile_image_url_https' => 'https://pbs.twimg.com/profile_images/723202157936168960/ZkHRO2Lm_normal.jpg',
        'profile_banner_url' => 'https://pbs.twimg.com/profile_banners/8854172/1427988219',
        'profile_link_color' => '3B94D9',
        'profile_sidebar_border_color' => 'FFFFFF',
        'profile_sidebar_fill_color' => 'DDFFCC',
        'profile_text_color' => '333333',
        'profile_use_background_image' => false,
        'has_extended_profile' => false,
        'default_profile' => false,
        'default_profile_image' => false,
        'following' => NULL,
        'follow_request_sent' => NULL,
        'notifications' => NULL,
      ),
      'geo' => NULL,
      'coordinates' => NULL,
      'place' => NULL,
      'contributors' => NULL,
      'is_quote_status' => false,
      'retweet_count' => 2,
      'favorite_count' => 4,
      'favorited' => false,
      'retweeted' => false,
      'possibly_sensitive' => false,
      'lang' => 'en',
    ),
    4 => 
    array (
      'created_at' => 'Thu May 26 16:00:09 +0000 2016',
      'id' => 735863101715795968,
      'id_str' => '735863101715795968',
      'text' => 'PHpStorm 2016.2 Early Access Program Started https://t.co/SjcQHQawt9 #Codeigniter #Symfony https://t.co/A1wggiKTVi',
      'truncated' => false,
      'entities' => 
      array (
        'hashtags' => 
        array (
          0 => 
          array (
            'text' => 'Codeigniter',
            'indices' => 
            array (
              0 => 69,
              1 => 81,
            ),
          ),
          1 => 
          array (
            'text' => 'Symfony',
            'indices' => 
            array (
              0 => 82,
              1 => 90,
            ),
          ),
        ),
        'symbols' => 
        array (
        ),
        'user_mentions' => 
        array (
        ),
        'urls' => 
        array (
          0 => 
          array (
            'url' => 'https://t.co/SjcQHQawt9',
            'expanded_url' => 'http://goo.gl/KQQHWz',
            'display_url' => 'goo.gl/KQQHWz',
            'indices' => 
            array (
              0 => 45,
              1 => 68,
            ),
          ),
        ),
        'media' => 
        array (
          0 => 
          array (
            'id' => 735863100755312646,
            'id_str' => '735863100755312646',
            'indices' => 
            array (
              0 => 91,
              1 => 114,
            ),
            'media_url' => 'http://pbs.twimg.com/media/CjZPl2PWgAYuD5-.jpg',
            'media_url_https' => 'https://pbs.twimg.com/media/CjZPl2PWgAYuD5-.jpg',
            'url' => 'https://t.co/A1wggiKTVi',
            'display_url' => 'pic.twitter.com/A1wggiKTVi',
            'expanded_url' => 'http://twitter.com/daycry9/status/735863101715795968/photo/1',
            'type' => 'photo',
            'sizes' => 
            array (
              'small' => 
              array (
                'w' => 340,
                'h' => 213,
                'resize' => 'fit',
              ),
              'thumb' => 
              array (
                'w' => 150,
                'h' => 150,
                'resize' => 'crop',
              ),
              'large' => 
              array (
                'w' => 640,
                'h' => 400,
                'resize' => 'fit',
              ),
              'medium' => 
              array (
                'w' => 600,
                'h' => 375,
                'resize' => 'fit',
              ),
            ),
          ),
        ),
      ),
      'metadata' => 
      array (
        'iso_language_code' => 'en',
        'result_type' => 'recent',
      ),
      'source' => '<a href="http://twitterdriver.com" rel="nofollow">Celebrity News Blog</a>',
      'in_reply_to_status_id' => NULL,
      'in_reply_to_status_id_str' => NULL,
      'in_reply_to_user_id' => NULL,
      'in_reply_to_user_id_str' => NULL,
      'in_reply_to_screen_name' => NULL,
      'user' => 
      array (
        'id' => 606190403,
        'id_str' => '606190403',
        'name' => 'Daycry',
        'screen_name' => 'daycry9',
        'location' => 'España',
        'description' => '',
        'url' => 'http://t.co/oWhCdzR7zn',
        'entities' => 
        array (
          'url' => 
          array (
            'urls' => 
            array (
              0 => 
              array (
                'url' => 'http://t.co/oWhCdzR7zn',
                'expanded_url' => 'http://daycryweb.blogspot.com',
                'display_url' => 'daycryweb.blogspot.com',
                'indices' => 
                array (
                  0 => 0,
                  1 => 22,
                ),
              ),
            ),
          ),
          'description' => 
          array (
            'urls' => 
            array (
            ),
          ),
        ),
        'protected' => false,
        'followers_count' => 3970,
        'friends_count' => 4828,
        'listed_count' => 1201,
        'created_at' => 'Tue Jun 12 09:55:02 +0000 2012',
        'favourites_count' => 20905,
        'utc_offset' => 7200,
        'time_zone' => 'Amsterdam',
        'geo_enabled' => false,
        'verified' => false,
        'statuses_count' => 26484,
        'lang' => 'es',
        'contributors_enabled' => false,
        'is_translator' => false,
        'is_translation_enabled' => false,
        'profile_background_color' => 'C0DEED',
        'profile_background_image_url' => 'http://abs.twimg.com/images/themes/theme1/bg.png',
        'profile_background_image_url_https' => 'https://abs.twimg.com/images/themes/theme1/bg.png',
        'profile_background_tile' => false,
        'profile_image_url' => 'http://pbs.twimg.com/profile_images/657128470657519616/xnn0jGen_normal.jpg',
        'profile_image_url_https' => 'https://pbs.twimg.com/profile_images/657128470657519616/xnn0jGen_normal.jpg',
        'profile_banner_url' => 'https://pbs.twimg.com/profile_banners/606190403/1445506561',
        'profile_link_color' => '0084B4',
        'profile_sidebar_border_color' => 'C0DEED',
        'profile_sidebar_fill_color' => 'DDEEF6',
        'profile_text_color' => '333333',
        'profile_use_background_image' => true,
        'has_extended_profile' => true,
        'default_profile' => true,
        'default_profile_image' => false,
        'following' => NULL,
        'follow_request_sent' => NULL,
        'notifications' => NULL,
      ),
      'geo' => NULL,
      'coordinates' => NULL,
      'place' => NULL,
      'contributors' => NULL,
      'is_quote_status' => false,
      'retweet_count' => 1,
      'favorite_count' => 2,
      'favorited' => false,
      'retweeted' => false,
      'possibly_sensitive' => false,
      'lang' => 'en',
    ),
  ),
  'search_metadata' => 
  array (
    'completed_in' => 0.050999999999999997,
    'max_id' => 735883042800164864,
    'max_id_str' => '735883042800164864',
    'next_results' => '?max_id=735863101715795967&q=%23symfony%20-RT&count=5&include_entities=1&result_type=recent',
    'query' => '%23symfony+-RT',
    'refresh_url' => '?since_id=735883042800164864&q=%23symfony%20-RT&result_type=recent&include_entities=1',
    'count' => 5,
    'since_id' => 0,
    'since_id_str' => '0',
  ),
);
