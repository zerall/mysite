<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
use yii\helpers\Url;
use app\models\Animservices;
/* @var $this yii\web\View */
$this->title = 'Услуги аниматора';
$this->params['breadcrumbs'][] = $this->title
?>

<h1><?= $this->title ?></h1>

<?php
foreach(Animservices::getServAnimList(Yii::$app->getRequest()->getQueryParam('id')) as $ites){?>
<div class = "col-sm-8"><h3><?= Html::encode($ites['serviceName']) ?></h3>
<p><?= Html::encode($ites['serviceDescription']) ?></p></div>
<?php }

?>


