<?php

if (!function_exists('response_with_messages')) {
    /**
     * @param $messages
     * @param int $statusCode
     * @param bool $error
     * @param array $data
     * @return array
     */
    function response_with_messages($messages, $statusCode = 200, $error = false, array $data = [])
    {
        return [
            'messages' => (array)$messages,
            'status_code' => $statusCode,
            'error' => $error,
            'data' => $data
        ];
    }
}