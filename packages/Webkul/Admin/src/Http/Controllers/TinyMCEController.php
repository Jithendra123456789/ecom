<?php

namespace Webkul\Admin\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class TinyMCEController extends Controller
{
    /**
     * Storage folder path.
     *
     * @var string
     */
    private $storagePath = 'tinymce';

    /**
     * Upload file from tinymce.
     *
     * @return void
     */
    public function upload()
    {
        $media = $this->storeMedia();

        if (! empty($media)) {
            return response()->json([
                'location' => $media['file_url']
            ]);
        }

        return response()->json([]);
    }

    /**
     * Store media.
     *
     * @return array
     */
    public function storeMedia()
    {
        if (request()->hasFile('file')) {
            return [
                'file'      => $path = request()->file('file')->store($this->storagePath, config('bagisto_filesystem.default')),
                'file_name' => request()->file('file')->getClientOriginalName(),
                'file_url'  => Storage::disk(config('bagisto_filesystem.default'))->url($path),
            ];
        }

        return [];
    }
}
