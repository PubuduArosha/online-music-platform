<?php

class Util {

    public static function fileUpload( $file , $path ){
               $file_name = $file['name'];
               $file_tmp = $file['tmp_name'];
               $file_size = $file['size'];
               $file_error = $file['error'];

               $file_ext = explode( '.' , $file_name );
               $file_ext = strtolower( end($file_ext) );

               $file_name_new = uniqid( '' , true) . '.' . $file_ext;
               $file_destination = $path . $file_name_new;

               if( move_uploaded_file( $file_tmp , $file_destination ) ){
                   return '/'.$file_destination;
               }else{
                   return null;
               }

    }

}

?>