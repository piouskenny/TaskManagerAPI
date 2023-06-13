<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'string | required | min:3 |max:255'
        ]);

        $userid = 1;

        Task::create([
            'user_id' => $userid,
            'task' => $request->task,
        ]);

        return response()->json('Task Added Succesfully');
    }

    public function edit(string $id)
    {
        $singleTask = Task::where('id', $id)->pluck('task');

        return response()->json($singleTask);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Task::where('id', $id)->update([
            'task' => $request->task
        ]);

        return response()->json('Task Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Task::where('id', $id)->delete();
    }
}
