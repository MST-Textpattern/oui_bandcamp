<?php

/*
 * This file is part of oui_bandcamp,
 * a oui_player v2+ extension to easily embed
 * Bandcamp customizable audio players in Textpattern CMS.
 *
 * https://github.com/NicolasGraph/oui_bandcamp
 *
 * Copyright (C) 2018 Nicolas Morand
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 of the License.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA..
 */

/**
 * Bandcamp
 *
 * @package Oui\Player
 */

namespace Oui {

    if (class_exists('Oui\Provider')) {

        class Bandcamp extends Provider
        {
            protected static $patterns = array(
                'album' => array(
                    'scheme' => '#((http|https)://bandcamp\.com/(EmbeddedPlayer/)?album=(\d+)/?)#i',
                    'id'     => 4,
                    'prefix' => 'album=',
                    'glue' => '/',
                ),
                'track' => array(
                    'scheme' => '#((http|https)://bandcamp\.com/(EmbeddedPlayer/)?[\S]+track=(\d+)/?)#i',
                    'id'     => 4,
                    'prefix' => 'track=',
                ),
            );
            protected static $src = '//bandcamp.com/';
            protected static $glue = array('EmbeddedPlayer/', '/', '/');
            protected static $dims = array(
                'width'     => array(
                    'default' => '350',
                ),
                'height'    => array(
                    'default' => '470',
                ),
                'ratio'     => array(
                    'default' => '',
                ),
            );
            protected static $params = array(
                'size'      => array(
                    'default' => 'large',
                    'force'   => true,
                    'valid'   => array('large', 'small'),
                ),
                'artwork'   => array(
                    'default' => '',
                    'valid'   => array('', 'none', 'big', 'small'),
                ),
                'bgcol'     => array(
                    'default' => '#ffffff',
                    'valid'   => 'color',
                ),
                'linkcol'   => array(
                    'default' => '#0687f5',
                    'valid'   => 'color',
                ),
                'tracklist' => array(
                    'default' => 'true',
                    'valid'   => array('true', 'false'),
                ),
            );
        }
    }
}
