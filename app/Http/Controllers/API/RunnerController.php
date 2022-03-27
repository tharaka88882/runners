<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Runner as RunnerResource;
use App\Models\Runner;
use Validator;


class RunnerController extends BaseController
{



    public function show($id)
    {
        // Check in the cache before search the databae.
        $data['runners'] = cache('runners', function () use($id) {
            return Runner::find($id);
        });

        if (is_null($data['runners'])) {
            return $this->handleError('Runner not found!');
        }
        return $this->handleResponse(new RunnerResource($data['runners']), 'Runner retrieved.');
    }



}
