<?php
declare(strict_types=1);

namespace App\Modules\ImageUpload;

use Cloudinary\Cloudinary;

class CloudinaryImageManager implements ImageManagerInterface
{
    private Cloudinary $cloudinary;

    public function __construct(Cloudinary $cloudinary)
    {
        $this->cloudinary = $cloudinary;
    }

    /**
     * 
     * @thorows \Cloudinary\Api\Exception\ApiError
     * 
    */
    public function save($file): string
    {
        return $this->cloudinary
                    ->uploadApi()
                    ->upload(is_string($file) ? $file : $file->getRealPath())['public_id'];
    }

    /**
     * 
     * @thorows \Cloudinary\Api\Exception\ApiError
     * 
     */
    public function delete(string $name): void
    {
        $this->cloudinary->uploadApi()->destroy($name);
    }
}