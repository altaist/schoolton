<?php

namespace App\Constants;

enum OrderState: int
{
    case Created = 0;
    case CheckingManager = 1;
    case CheckingClient = 2;
    case Payment = 3;
    case CheckingAfterPayment = 4;
    case InWork = 5;
    case Completed = 10;
    case Closed = 100;
}


