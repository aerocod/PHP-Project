<?php

strlen(0);
// TypeError: strlen(): Argument #1 ($str) must be of type string, array given

array_chunk([0],-1);
// ValueError: array_chunk(): Argument #2 ($length) must be greater than 0