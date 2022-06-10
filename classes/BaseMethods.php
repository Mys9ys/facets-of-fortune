<?php

namespace classes;

trait BaseMethods
{
    protected function loadFile($file)
    {
        $info = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $file);

        return json_decode($info, true);
    }

    protected function saveFile($url, $data)
    {
        $fp = fopen($_SERVER['DOCUMENT_ROOT'] . $url, 'w');
        fwrite($fp, json_encode($data));
        fclose($fp);
    }
}