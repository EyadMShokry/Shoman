<?php
if (!function_exists('uploadImage')) {
    /**
     * Upload Image to specific location.
     *
     * @param  $image
     * @param $path
     * @return string
     */
    function uploadImage($image, $path)
    {
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/' . $path);
        $image->move($destinationPath, $name);
        return $name;
    }
}