<?php

namespace App\Events;

class Img
{
  protected $url_upload = "/public/upload/images/";

	// rename file
	function renamefile($nametemp)
	{
		$file_basename = substr($nametemp, 0, strripos($nametemp, '.'));
		#lấy phần mở rộng của file
		$type = $this->getExtension(stripslashes($nametemp));
		return uniqid().'_'.md5($file_basename) . '.'.$type;
	}

	// get extenstions
	function getExtension($str)
	{
		$i = strrpos($str,".");
		if (!$i)
		{
			return "";
		}
		$l = strlen($str) - $i;
		return strtolower(substr($str,$i+1,$l));
	}

	// lib smart resize
    function smart_resize_image($file,$string= null,$width = 0,$height = 0,$proportional = false,$output = 'file',$delete_original = true,$use_linux_commands = false,$quality = 100) {

        if ( $height <= 0 && $width <= 0 ) return false;
        if ( $file === null && $string === null ) return false;
        # Setting defaults and meta
        $info                         = $file !== null ? getimagesize($file) : getimagesizefromstring($string);
        $image                        = '';
        $final_width                  = 0;
        $final_height                 = 0;
        list($width_old, $height_old) = $info;
        $cropHeight = $cropWidth = 0;
        # Calculating proportionality
        if ($proportional) {
          if      ($width  == 0)  $factor = $height/$height_old;
          elseif  ($height == 0)  $factor = $width/$width_old;
          else                    $factor = min( $width / $width_old, $height / $height_old );
          $final_width  = round( $width_old * $factor );
          $final_height = round( $height_old * $factor );
        }
        else {
          $final_width = ( $width <= 0 ) ? $width_old : $width;
          $final_height = ( $height <= 0 ) ? $height_old : $height;
          $widthX = $width_old / $width;
          $heightX = $height_old / $height;

          $x = min($widthX, $heightX);
          $cropWidth = ($width_old - $width * $x) / 2;
          $cropHeight = ($height_old - $height * $x) / 2;
        }
        # Loading image to memory according to type
        switch ( $info[2] ) {
          case IMAGETYPE_JPEG:  $file !== null ? $image = imagecreatefromjpeg($file) : $image = imagecreatefromstring($string);  break;
          case IMAGETYPE_GIF:   $file !== null ? $image = imagecreatefromgif($file)  : $image = imagecreatefromstring($string);  break;
          case IMAGETYPE_PNG:   $file !== null ? $image = imagecreatefrompng($file)  : $image = imagecreatefromstring($string);  break;
          default: return false;
        }


        # This is the resizing/resampling/transparency-preserving magic
        $image_resized = imagecreatetruecolor( $final_width, $final_height );
        if ( ($info[2] == IMAGETYPE_GIF) || ($info[2] == IMAGETYPE_PNG) ) {
          $transparency = imagecolortransparent($image);
          $palletsize = imagecolorstotal($image);
          if ($transparency >= 0 && $transparency < $palletsize) {
            $transparent_color  = imagecolorsforindex($image, $transparency);
            $transparency       = imagecolorallocate($image_resized, $transparent_color['red'], $transparent_color['green'], $transparent_color['blue']);
            imagefill($image_resized, 0, 0, $transparency);
            imagecolortransparent($image_resized, $transparency);
          }
          elseif ($info[2] == IMAGETYPE_PNG) {
            imagealphablending($image_resized, false);
            $color = imagecolorallocatealpha($image_resized, 0, 0, 0, 127);
            imagefill($image_resized, 0, 0, $color);
            imagesavealpha($image_resized, true);
          }
        }
        imagecopyresampled($image_resized, $image, 0, 0, $cropWidth, $cropHeight, $final_width, $final_height, $width_old - 2 * $cropWidth, $height_old - 2 * $cropHeight);


        # Taking care of original, if needed
        if ( $delete_original ) {
          if ( $use_linux_commands ) exec('rm '.$file);
          else @unlink($file);
        }
        # Preparing a method of providing result
        switch ( strtolower($output) ) {
          case 'browser':
            $mime = image_type_to_mime_type($info[2]);
            header("Content-type: $mime");
            $output = NULL;
          break;
          case 'file':
            $output = $file;
          break;
          case 'return':
            return $image_resized;
          break;
          default:
          break;
        }

        # Writing image according to type to the output destination and image quality
        switch ( $info[2] ) {
          case IMAGETYPE_GIF:   imagegif($image_resized, $output);    break;
          case IMAGETYPE_JPEG:  imagejpeg($image_resized, $output, $quality);   break;
          case IMAGETYPE_PNG:
            $quality = 9 - (int)((0.9*$quality)/10.0);
            imagepng($image_resized, $output, $quality);
            break;
          default: return false;
        }
        return true;
    }

    function myresize($file,$resizedFile,$max_width, $max_height) {
        $imgsize = getimagesize($file);
        $width   = $imgsize[0];
        $height  = $imgsize[1];
        #-------------------------------------------------------------resize cho hinh o trang list
        # neu w & h deu lon hon size mac dinh

        if(empty($width) || empty($height)) return false;

        if($width <= $max_width && $height > $max_height ){
            $this->smart_resize_image($file ,null, null , $max_height , true , $resizedFile , false , false ,100 );
        }else if($width > $max_width && $height <= $max_height){
            $this->smart_resize_image($file ,null, $max_width , null , true , $resizedFile , false , false ,100 );
        }else if($width <= $max_width && $height <= $max_height){
            copy($file,$resizedFile);
        }else{
            $this->smart_resize_image($file ,null, $max_width , $max_height , true , $resizedFile , false , false ,100 );
        }
        return true;
    }

    function folderImage($file_name){
      $arr_info = array();
      switch ($file_name) {
        //home page
        case 'himg1':
        case 'himg2':
        case 'himg3':
        case 'himg4':
          $arr_info['width']  =  472;
          $arr_info['height'] =  269;
        break;
        case 'himg5':
        case 'himg6':
          $arr_info['width']  =  530;
          $arr_info['height'] =  507;
        case 'himg7':
          $arr_info['width']  =  470;
          $arr_info['height'] =  557;
        break;
        case 'himg8':
          $arr_info['width']  =  476;
          $arr_info['height'] =  290;
        break;
        case 'himg9':
          $arr_info['width']  =  306;
          $arr_info['height'] =  290;
        break;
        case 'himg10':
          $arr_info['width']  =  353;
          $arr_info['height'] =  596;
        break;
        case 'himg11':
          $arr_info['width']  =  306;
          $arr_info['height'] =  290;
        break;
        case 'himg12':
          $arr_info['width']  =  476;
          $arr_info['height'] =  290;
        break;
        case 'himg13':
        case 'himg14':
        case 'himg15':
          $arr_info['width']  =  470;
          $arr_info['height'] =  557;
        break;
        // slider
        case 'simg_detail':
          $arr_info['width']  =  1920;
          $arr_info['height'] =  629;
        break;
        // product
        case 'pimg_list':
          $arr_info['width']  =  227;
          $arr_info['height'] =  274;
        break;
        case 'pimg_detail':
          $arr_info['width']  =  600;
          $arr_info['height'] =  624;
        break;
        case 'bimg_detail':
          $arr_info['width']  =  "auto";
          $arr_info['height'] =  "auto";
        break;
        default:
          $arr_info['width']  =  'auto';
          $arr_info['height'] =  'auto';
        break;
      }
      return $arr_info;
    }

    // function upload
    public function uploadImages($folder = ""){
      $result = array();
      $url_upload = BASE_IMG.$folder;
      if(!empty($_FILES)){
        foreach ($_FILES as $key_name => $value) {
          $file_name = (!empty($value['name'])) ? $this->renamefile($value['name']) : "";
          if(!empty($file_name)){
            $info = $this->folderImage($key_name);
            $file_dest = $url_upload.$file_name;
            if(move_uploaded_file($_FILES[$key_name]['tmp_name'], $file_dest)){
              $this->myresize($file_dest,$file_dest,$info['width'], $info['height']);
              chmod($file_dest,0775);
            }
          }
          $result[$key_name] = $file_name;
	    	}
    	}
      return $result;
    }

    public function removeImages($folder = "",$file_name){
      $url = BASE_IMG.$folder.$file_name;
      if(!empty($file_name) && file_exists($url))  unlink($url);
    }
}
