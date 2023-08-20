<?php

function hapussessions1($data, $name)
{
    $_SESSION = [];
    $data->remove($name);
    $data->destroy();
}
