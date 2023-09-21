<?php
$is_schema = (env('APP_ENV', 'local') == 'production' || env('APP_ENV', 'local') == 'development')?true:false;
return [
    'upload'=>$is_schema?env('DB_UPLOAD_SCHEMA', 'upload'):'public',
    'user'=>$is_schema?env('DB_USER_SCHEMA', 'user'):'public',
];
