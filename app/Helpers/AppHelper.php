<?php

namespace App\Helpers;

class AppHelper {
    static function upload($request, $post, $folder) {
        $fileName = "";
        if ($request->hasFile($post)) {
            $file = $request->file($post);
            $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $fileName . '_' . time() . '.' . $file->getClientOriginalExtension();

            $folder .= '/';
            $fileName = $folder . $fileName; 
            \Storage::disk('public')->put($fileName, \File::get($file));
        }
        return $fileName;
    }

    static function upload_update($request, $post, $folder,$filedb=null) {
        $fileName = $filedb;
        if ($request->hasFile($post)) {
            //delete
            \Storage::disk('public')->delete($filedb);

            $file = $request->file($post);
            $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $fileName . '_' . time() . '.' . $file->getClientOriginalExtension();

            $folder .= '/';
            $fileName = $folder . $fileName; 
            \Storage::disk('public')->put($fileName, \File::get($file));
        }
        return $fileName;
    }
}