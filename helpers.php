<?php
declare(strict_types=1);

if(!function_exists('image_url')) {
    function image_url(string $path): string
    {
        if(app()->environment('production')) {
            return (string) app()->make(\Cloudinary\Cloudinary::class)->iamge($path)->secure();
        }
        return asset('storage/images/' . $path);
    }
}