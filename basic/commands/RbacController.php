<?php
namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll(); //удаляем старые данные
        // anim
        $anim = $auth->createPermission('anim');
        $anim->description = 'Аниматор';
        $auth->add($anim);

        // org
        $org = $auth->createPermission('org');
        $org->description = 'Организатор';
        $auth->add($org);

        // admin
        $admin = $auth->createPermission('admin');
        $admin->description = 'Администратор';
        $auth->add($admin);

        // Assign roles to anims. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your anim model.
        $auth->assign($anim, 1);
        $auth->assign($org, 2);
        $auth->assign($admin, 3);
    }
}