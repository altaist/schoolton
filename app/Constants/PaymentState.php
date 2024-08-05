<?php

namespace App\Constants;

enum PaymentState: int
{
    case Created = 0;
    case Active = 1;
    case Completed = 10;
    case Closed = 100;
}


