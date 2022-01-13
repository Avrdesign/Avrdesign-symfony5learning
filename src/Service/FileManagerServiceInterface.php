<?php
/**
 * Created by PhpStorm.
 * User: Avramets
 * Date: 13.01.2022
 * Time: 12:36
 */

namespace App\Service;


use Symfony\Component\HttpFoundation\File\UploadedFile;

interface FileManagerServiceInterface
{

  /**
   * @param UploadedFile $file
   *
   * @return string
   */
  public function imagePostUpload(UploadedFile $file): string;

  /**
   * @param string $filename
   *
   * @return mixed
   */
  public function removePostImage(string $filename);
}