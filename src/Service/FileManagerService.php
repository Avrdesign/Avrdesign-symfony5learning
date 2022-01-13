<?php
/**
 * Created by PhpStorm.
 * User: Avramets
 * Date: 13.01.2022
 * Time: 12:46
 */

namespace App\Service;


use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileManagerService implements FileManagerServiceInterface
{
  private $postImageDirectory;

  /**
   * FileManagerService constructor.
   *
   * @param $postImageDirectory
   */
  public function __construct($postImageDirectory) {
    $this->postImageDirectory = $postImageDirectory;
  }

  /**
   * @return mixed
   */
  public function getPostImageDirectory() {
    return $this->postImageDirectory;
  }

  public function imagePostUpload(UploadedFile $file): string
  {
    $fileName = uniqid() . '.' . $file->guessExtension();

    try {
      $file->move($this->getPostImageDirectory(), $fileName);
    } catch(FileException $exception) {
      return $exception;
    }

    return $fileName;
  }

  public function removePostImage(string $fileName) {
    $fileSystem = new Filesystem();
    $fileImage = $this->getPostImageDirectory() . $fileName;
    try{
      $fileSystem->remove($fileImage);
    } catch (IOExceptionInterface $exception){
      echo $exception->getMessage();
    }

  }
}