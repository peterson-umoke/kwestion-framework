<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

/**
 * uploads a file using the upload class
 *
 * @param string $image_file
 * @param string $dest
 * @param string $tablename
 * @param string $fieldname
 * @param array $where
 * @return void
 */
function upload_image($image, $dest = '', $tablename = '', $fieldname = 'thumbnail_url', $where = array())
{
    // inititate the upload class
    $handle = new upload($image);

    // perform the picture upload
    if ($handle->uploaded) {
        $handle->file_new_name_body   = uniqid("img_");
        $handle->file_max_size = '2000000000'; // 1KB
        $handle->image_resize         = true;
        $handle->image_x              = 500;
        $handle->image_ratio_y        = true;
        $handle->process(UPLOADS_DIR_NAME . '/'.$dest);
        if ($handle->processed) {
            // echo 'image resized';
            $image_name = $handle->file_dst_pathname;
            $handle->clean();

            // update the new path in the database
            $medoo = new Database();

            // the idea is that the post must have been created first so that we can use the id for the update
            $medoo->update($tablename, [
                $fieldname	=> SITE_URL . "/{$image_name}",
            ], $where);
        } else {
            echo 'error : ' . $handle->error;
        }
    }
}
