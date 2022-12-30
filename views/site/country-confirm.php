<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use app\models\Country;

?>

<p class="text-primary mt-5 font-weight-bold">You searched for the following country:</p>
<?php
$countrySearched = Country::findOne($model->code);
if (isset($countrySearched->name))
    echo ($countrySearched->name);
?>


<?php $countries = Country::find()->orderBy('name')->all() ?>

<p class="text-primary mt-5 font-weight-bold">Full country list:</p>

<ul>
    <?php foreach ($countries as $country)
    {
        echo '<li>' . ArrayHelper::getValue($country, 'name') . '</li>';
    }
    ?>
</ul>