<?php

namespace App\Traits;

use App\Http\Controllers\Orders\OrderController;

trait HasOwner
{
    public function getOwner($role, $from = null)
    {
        switch($role)
        {
            case 'admin' : {
                switch ($from){
                    case OrderController::class:
                    default:
                        return auth()->user();
                }
            }
            case 'manager' : {
                return auth()->user()->manager()->first();
            }
            case 'writer' : {
                return auth()->user()->writer()->first();
            }
            case 'customer' : {
                return auth()->user()->customer()->first();
            }
            default:
                return null;
        }
    }
}
