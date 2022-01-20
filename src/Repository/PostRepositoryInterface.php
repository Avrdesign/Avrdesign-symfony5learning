<?php
/**
 * Created by PhpStorm.
 * User: Avramets
 * Date: 20.01.2022
 * Time: 16:12
 */

namespace App\Repository;
use App\Entity\Post;
use Symfony\Component\HttpFoundation\File\UploadedFile;

interface PostRepositoryInterface
{

  /**
   * @return array
   */
  public function getAllPost(): array;

  /**
   * @param int $postId
   * @return object Post
   */
  public function getOnePost(int $postId): object;

  /**
   * @param Post $post
   * @param UploadedFile $file
   *
   * @return object
   */
  public function setCreatePost(Post $post, UploadedFile $file): object;

  /**
   * @param Post $post
   * @param UploadedFile $file
   *
   * @return object Post
   */
  public function setUpdatePost(Post $post, UploadedFile $file): object;

  /**
   * @param Post $post
   */
  public function setDeletePost(Post $post);
}