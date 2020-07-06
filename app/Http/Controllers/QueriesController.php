<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Query;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class QueriesController extends Controller
{

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'message' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
        ]);
        return $validator;
    }

    public function store(Request $request)
    {
      //
      // DB::beginTransaction();
      //
      // try {
        $query = new Query();
        $query->message = $request->message;
        $query->name = $request->name;
        $query->email = $request->email;
        $query->subject = $request->subject;

        // $validated = $this->validator($query->toArray());

        $query->save();

        return redirect("/#queries")->with("message", "Thank you for letting us know about your queries. We will let you know the answer soon.");

      // } catch (Exception $e) {
      //     DB::rollBack();
      //     throw new GeneralException(__('There was a problem saving your query. Please try again later.'));
      // }

      // DB::commit();

    }
}
