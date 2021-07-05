<?php

/**
 * Copyright (c) Ivan Akimov.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/vinkla/hashids
 */

namespace Hashids\Math;

interface MathInterface
{
    public function add($a, $b);
    public function multiply($a, $b);
    public function divide($a, $b);
    public function mod($n, $d);
    public function greaterThan($a, $b);
    public function intval($a);
    public function strval($a);
    public function get($a);
}
