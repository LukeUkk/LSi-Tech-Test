<?php
namespace App\Http\Requests;
use Illuminate\Http\Request;

class RequestHandler {
    private $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function getRequestData($key = null, $default = null) {
        return $this->request->input($key, $default);
    }

    public function setResponseData($key, $value) {
        return response()->json([$key => $value]);
    }
}