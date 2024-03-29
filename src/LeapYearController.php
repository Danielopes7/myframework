<?php

namespace Daniel\Myframework;
use Symfony\Component\HttpFoundation\Response;

class LeapYearController
{
    public function index(int $year): Response
    {
        if (is_leap_year($year)) {
            return new Response('Yep, this is a leap year!');
        }

        return new Response('Nope, this is not a leap year.');
    }
}