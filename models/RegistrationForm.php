<?php
namespace app\models;

use yii\base\Model;
// model voor de registratie form
class RegistrationForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $password_repeat;

    public function rules()
    {
        return [
            [['username', 'email', 'password', 'password_repeat'], 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => User::class],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'compare', 'compareAttribute' => 'password'],
        ];
    }

    public function register()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password); //maakt wachtwoord
        $user->generateAuthKey(); //maakt een sleutel voor de wachtwoord zodat niemand het wachtwoord kan zien zelfs niet in de database
        if ($user->save()) {
            return $user;
        }

        return null;
    }
}
