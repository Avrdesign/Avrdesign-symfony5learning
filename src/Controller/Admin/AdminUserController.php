<?php
/**
 * Created by PhpStorm.
 * User: Avramets
 * Date: 04.01.2022
 * Time: 10:51
 */

namespace App\Controller\Admin;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminUserController extends AdminBaseController
{

  /**
   * Route("/admin/user", name="admin_user")
   * @return Response
   */
  public function index(){
    //Получаем список пользователей
    $users = $this->getDoctrine()->getRepository(User::class)->findAll();
    $forRender = parent::renderDefault(); //Значение по умолчанию
    //Передаем значения в шаблон
    $forRender['title'] = 'Пользователи';
    $forRender['users'] = $users;
    return $this->render('admin/user/index.html.twig', $forRender);
  }
}