<?php

namespace App\Http\Controllers\Voucher;

use App\Models\Voucher;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;;

class CreateVoucherController extends Controller
{
    public function handle(Request $request) {
        $voucher = new Voucher($request->all());

        $voucher->save();

        return response()
            ->json(
                $voucher->fresh()
            )
            ->setStatusCode(201);
    }
}
