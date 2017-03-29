<?php

class ResourceLoader
{
    public function loadCssLinks($links)
    {
        if (!empty($links)) {
            foreach ($links as $link) {
                echo Phalcon\Tag::stylesheetLink($link);
            }
        }
    }

    public function loadJavaScripts($scripts) {
        if (!empty($scripts)) {
            foreach ($scripts as $script) {
                echo Phalcon\Tag::javascriptInclude($script);
            }
        }
    }
}