<?php
/**
 * Created by PhpStorm.
 * User: Avramets
 * Date: 20.01.2022
 * Time: 14:34
 */

namespace App\Repository;

use App\Entity\Category;

interface CategoryRepositoryInterface {

  /**
   * @return Category[]
   */
  public function getAllCategory(): array;

  /**
   * @param int $categoryId
   * @return object Category
   */
  public function getOneCategory(int $categoryId): object;

  /**
   * @param Category $category
   * @return object Category
   */
  public function setCreateCategory(Category $category): object;

  /**
   * @param Category $category
   * @return object Category
   */
  public function setUpdateCategory(Category $category): object;

  /**
   * @param Category $category
  */
  public function setDeleteCategory(Category $category);
}
