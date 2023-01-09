<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    // public $verifyCode;
    public $reCaptcha;

    public $country;

    public $city;

    public $mobile;



    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'mobile', 'subject', 'body', 'country', 'city'], 'required'],
            [['name'], 'match', 'pattern' => '/^[a-zA-Z]+$/', 'message' => 'Only English letters are allowed'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            [['name'], 'string', 'min' => 2, 'message' => 'Please enter at least 2 letters'],
            [['mobile'], 'string', 'length' => 12, 'message' => 'Please enter 12 digits'],
            [['mobile'], 'match', 'pattern' => '/^[-+]?[0-9]*\.?[0-9]+([eE][-+]?[0-9]+)?$/'],
            ['reCaptcha', \himiklab\yii2\recaptcha\ReCaptchaValidator2::className(), 'secret' => '6Lea2OMjAAAAAOIr7qzkfN2_uHlA7SlJXjgdieU9',
                'uncheckedMessage' => 'Please confirm that you are not a bot.'],

        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate())
        {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}