<?php
class Template
{
    function display($tpl_file_path)
    {
        extract((array)$this);
        include(ROOT_PATH . '/View/' . $tpl_file_path);
    }
}
