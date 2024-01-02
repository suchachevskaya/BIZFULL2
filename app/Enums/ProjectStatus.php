<?php
namespace App\Enums;

enum ProjectStatus:string
{
    case OPEN='open';
    case RESOLVED ='resolved';
    case REJECTED='rejected';
}
