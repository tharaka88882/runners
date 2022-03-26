<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Runner as RunnerResource;
use App\Models\Runner;
use Validator;


class RunnerController extends BaseController
{

    // public function index()
    // {
    //     $tasks = Task::all();
    //     return $this->handleResponse(TaskResource::collection($tasks), 'Tasks have been retrieved!');
    // }


    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     $validator = Validator::make($input, [
    //         'name' => 'required',
    //         'details' => 'required'
    //     ]);
    //     if($validator->fails()){
    //         return $this->handleError($validator->errors());
    //     }
    //     $task = Task::create($input);
    //     return $this->handleResponse(new TaskResource($task), 'Task created!');
    // }


    public function show($id)
    {
       // return json_encode(array('id'=>'1'));
        $runners = Runner::find($id);
        if (is_null($runners)) {
            return $this->handleError('Runner not found!');
        }
        return $this->handleResponse(new RunnerResource($runners), 'Runner retrieved.');
    }


    // public function update(Request $request, Task $task)
    // {
    //     $input = $request->all();

    //     $validator = Validator::make($input, [
    //         'name' => 'required',
    //         'details' => 'required'
    //     ]);

    //     if($validator->fails()){
    //         return $this->handleError($validator->errors());
    //     }

    //     $task->name = $input['name'];
    //     $task->details = $input['details'];
    //     $task->save();

    //     return $this->handleResponse(new TaskResource($task), 'Task successfully updated!');
    // }

    // public function destroy(Task $task)
    // {
    //     $task->delete();
    //     return $this->handleResponse([], 'Task deleted!');
    // }
}
