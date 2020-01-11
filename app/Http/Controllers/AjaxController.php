<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use File;


class AjaxController extends Controller
{
    /**
     * Wrap data in json format to reply back to ajax call
     *
     * @param $to_send
     * @param $status
     * @return \Illuminate\Http\JsonResponse
     */
    private function wrap_response($to_send, $status)
    {
        $response = array(
            'status' => $status,
            'data' => $to_send,
        );
        return response()->json($response);
    }

    /**
     * Toggle item status into active or not active by changing status column
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actions_toggle(Request $request)
    {
        $request = $request->all();
        DB::update('update ' . $request['table_name'] . ' set active = ? where id = ?', [$request['active'], $request['id']]);
        return $this->wrap_response('Status toggled successfully.', Response::HTTP_OK);
    }

    /**
     * Toggle item status into active or not active by changing status column
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actions_delete(Request $request)
    {
        $request = $request->all();
        if(isset($request['image_path']) && $request['image_path']){
            // Remove image
            File::delete($request['image_path']);
        }
        DB::delete('delete from ' . $request['table_name'] . ' where id = ?', [$request['id']]);
        return $this->wrap_response('Item deleted successfully.', Response::HTTP_OK);
    }
}