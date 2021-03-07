<?php
return [
    "MediaTypeServices" => [
        "image" => [
            "extensions" => [
                "png", "jpg", "jpeg"
            ],
            "handler" => \Khaleghi\Media\Services\ImageFileService::class
        ],
        "video" => [
            "extensions" =>[
                "avi", "mp4", "mkv"
            ],
            "handler" => \Khaleghi\Media\Services\VideoFileService::class,
        ],
        "zip" => [
            "extensions" => [
                "zip", "rar", "tar"
            ],
            "handler" => \App\ZipFileService::class
        ]
    ]
];
