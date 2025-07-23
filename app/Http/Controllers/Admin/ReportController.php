<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;

class ReportController extends Controller
{
    public function transactionlog()
    {
        $page_title = 'Transaction Log';
        $transaction = Transaction::all();

        return view('Admin.Reports.transactionlog', compact('transaction', 'page_title'));
    }
}
