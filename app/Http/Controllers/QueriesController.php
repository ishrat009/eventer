<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Query;

class QueriesController extends Controller
{
    public function store(Request $request)
    {
        $query = new Query();
        $query->message = $request->message;
        $query->name = $request->name;
        $query->email = $request->email;
        $query->subject = $request->subject;

        $query->save();

        return redirect("/#queries")->with("message", "Thank you for letting us know about your queries. We will let you know the answer soon.");
    }
}
