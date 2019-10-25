<?php

namespace PSR12\Bad;

class badClass
{
    const BAD = 'this should be fine in php7.0 and under but 7.1+ requires a scope';
}