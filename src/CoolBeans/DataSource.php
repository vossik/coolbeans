<?php

declare(strict_types = 1);

namespace Infinityloop\CoolBeans;

use Infinityloop\CoolBeans\Contract\PrimaryKey;

interface DataSource extends \Infinityloop\CoolBeans\Contract\DataSource
{
    public function getRow(PrimaryKey $key) : \Infinityloop\CoolBeans\Bean;

    public function findAll() : \Infinityloop\CoolBeans\Selection;

    public function findByArray(array $filter) : \Infinityloop\CoolBeans\Selection;
}