<?php
namespace app\controllers;

use app\models\Banner;
use app\models\NumerosVarios;
use app\models\Tombola;
use app\models\TombolaMomento;
use app\models\TombolaNumero;
use app\models\User;
use app\models\LoginForm;
use app\models\AccountActivation;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use app\models\SignupForm;
use app\models\ContactForm;
use mPDF;
use yii\helpers\Html;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use Yii;

/**
 * Site controller.
 * It is responsible for displaying static pages, logging users in and out,
 * sign up and account activation, and password reset.
 */
class SiteController extends Controller
{
    /**
     * Returns a list of behaviors that this component should behave as.
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Declares external actions for the controller.
     *
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

//------------------------------------------------------------------------------------------------//
// STATIC PAGES
//------------------------------------------------------------------------------------------------//

    /**
     * Displays the index (home) page.
     * Use it in case your home page contains static content.
     *
     * @return string
     */
    public function actionIndex()
    {
        $banners = Banner::find()->orderBy('orden')->all();

        // ULTIMA TOMBOLA
        $ult_tombola = Tombola::find()->orderBy(['id' => SORT_DESC])->one();
        $numerosUltimaTomb = TombolaNumero::find()->where(['id_tombola' => $ult_tombola->id])->one();

        //ULTIMOS PRIMEROS PREMIOS DE TOMBOLA MATUTINA - VASPERTINA - TARDE - NOCTURA
        $ult_tomb_mat = Tombola::find()->where(['id_momento' => 1])->orderBy(['id' => SORT_DESC])->one();
        $primer_premio_mat = TombolaNumero::find()->where(['id_tombola' => $ult_tomb_mat->id])->one();

        $ult_tomb_vesp = Tombola::find()->where(['id_momento' => 2])->orderBy(['id' => SORT_DESC])->one();
        $primer_premio_vesp = TombolaNumero::find()->where(['id_tombola' => $ult_tomb_vesp->id])->one();

        $ult_tomb_tarde = Tombola::find()->where(['id_momento' => 3])->orderBy(['id' => SORT_DESC])->one();
        $primer_premio_tarde = TombolaNumero::find()->where(['id_tombola' => $ult_tomb_tarde->id])->one();

        $ult_tomb_noc = Tombola::find()->where(['id_momento' => 4])->orderBy(['id' => SORT_DESC])->one();
        $primer_premio_noc = TombolaNumero::find()->where(['id_tombola' => $ult_tomb_noc->id])->one();

        $numeros_varios = NumerosVarios::find()->orderBy(['id' => SORT_DESC])->one();
        //var_dump($numerosUltimaTomb);
        return $this->render('index',[
            'banners' => $banners,
            'numerosUltimaTomb' => $numerosUltimaTomb,
            'primer_premio_mat' => $primer_premio_mat->numero_1,
            'primer_premio_vesp' => $primer_premio_vesp->numero_1,
            'primer_premio_tarde' => $primer_premio_tarde->numero_1,
            'primer_premio_noc' => $primer_premio_noc->numero_1,
            'numeros_varios' => $numeros_varios,
            'momento_ult_tombola' => TombolaMomento::findOne(['id' => $ult_tombola->id_momento])->nombre,
        ]);
    }

    /**
     *
     *
     * @return string
     */
    public function actionImprimir($id_tombola)
    {
        $ult_tombola = Tombola::findOne(['id' => $id_tombola]);
        $momento_ult_tombola = TombolaMomento::findOne(['id' => $ult_tombola->id_momento])->nombre;
        $numerosUltimaTomb   = TombolaNumero::find()->where(['id_tombola' => $id_tombola])->one();

        $html = '
        <div class="row bottom_margin_20" style="text-align: center">
            <div class="col-md-12" style="display: block;margin: auto">
                <a><img src="../img/logo.quinituc.jpg" width="164" height="auto"></a>
                <h3 class="lema">"EL JUEGO LEGAL AYUDA A LA COMUNIDAD"</h3>
            </div>
        </div>
        <div class="contenedor_ultimos_resultados bottom_margin_40">
            <h3 class="titulo_ultimos_resultados"> ÚLTIMOS RESULTADOS DE LA QUINIELA</h3>
            <h3 class="titulo_ultimos_resultados_momento">'.$momento_ult_tombola.'</h3>
            <div class="contenedor_numeros_tombola bottom_margin_20" style="width: 49%;float: left">
                <div class="numero_tombola">1º '.$numerosUltimaTomb->numero_1.' </div>
                <div class="numero_tombola">2º '.$numerosUltimaTomb->numero_2.' </div>
                <div class="numero_tombola">3º '.$numerosUltimaTomb->numero_3.' </div>
                <div class="numero_tombola">4º '.$numerosUltimaTomb->numero_4.' </div>
                <div class="numero_tombola">5º '.$numerosUltimaTomb->numero_5.' </div>
                <div class="numero_tombola">6º '.$numerosUltimaTomb->numero_6.' </div>
                <div class="numero_tombola">7º '.$numerosUltimaTomb->numero_7.' </div>
                <div class="numero_tombola">8º '.$numerosUltimaTomb->numero_8.' </div>
                <div class="numero_tombola">9º '.$numerosUltimaTomb->numero_9.' </div>
                <div class="numero_tombola">10º '.$numerosUltimaTomb->numero_10.' </div>
            </div>
            <div class="contenedor_numeros_tombola bottom_margin_20" style="width: 49%;float: left">
                <div class="numero_tombola">11º '.$numerosUltimaTomb->numero_11.' </div>
                <div class="numero_tombola">12º '.$numerosUltimaTomb->numero_12.' </div>
                <div class="numero_tombola">13º '.$numerosUltimaTomb->numero_13.' </div>
                <div class="numero_tombola">14º '.$numerosUltimaTomb->numero_14.' </div>
                <div class="numero_tombola">15º '.$numerosUltimaTomb->numero_15.' </div>
                <div class="numero_tombola">16º '.$numerosUltimaTomb->numero_16.' </div>
                <div class="numero_tombola">17º '.$numerosUltimaTomb->numero_17.' </div>
                <div class="numero_tombola">18º '.$numerosUltimaTomb->numero_18.' </div>
                <div class="numero_tombola">19º '.$numerosUltimaTomb->numero_19.' </div>
                <div class="numero_tombola">20º '.$numerosUltimaTomb->numero_20.' </div>
            </div>
        </div>';

        $mpdf = new mPDF();
        $css = file_get_contents('themes/light/css/style.css');
        $mpdf->WriteHTML($css, 1);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
        exit;
       
    }



    /**
     * Displays the about static page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays the contact static page and sends the contact email.
     *
     * @return string|\yii\web\Response
     */
    public function actionContact()
    {
        $model = new ContactForm();

        if (!$model->load(Yii::$app->request->post()) || !$model->validate()) {
            return $this->render('contact', ['model' => $model]);
        }

        if (!$model->sendEmail(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('error', Yii::t('app', 'There was some error while sending email.'));
            return $this->refresh();
        }

        Yii::$app->session->setFlash('success', Yii::t('app',
            'Thank you for contacting us. We will respond to you as soon as possible.'));

        return $this->refresh();
    }

//------------------------------------------------------------------------------------------------//
// LOG IN / LOG OUT / PASSWORD RESET
//------------------------------------------------------------------------------------------------//

    /**
     * Logs in the user if his account is activated,
     * if not, displays appropriate message.
     *
     * @return string|\yii\web\Response
     */
    public function actionLogin()
    {
        // user is logged in, he doesn't need to login
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        // get setting value for 'Login With Email'
        $lwe = Yii::$app->params['lwe'];

        // if 'lwe' value is 'true' we instantiate LoginForm in 'lwe' scenario
        $model = $lwe ? new LoginForm(['scenario' => 'lwe']) : new LoginForm();

        // monitor login status
        $successfulLogin = true;

        // posting data or login has failed
        if (!$model->load(Yii::$app->request->post()) || !$model->login()) {
            $successfulLogin = false;
        }

        // if user's account is not activated, he will have to activate it first
        if ($model->status === User::STATUS_INACTIVE && $successfulLogin === false) {
            Yii::$app->session->setFlash('error', Yii::t('app',
                'You have to activate your account first. Please check your email.'));
            return $this->refresh();
        }

        // if user is not denied because he is not active, then his credentials are not good
        if ($successfulLogin === false) {
            return $this->render('login', ['model' => $model]);
        }

        // login was successful, let user go wherever he previously wanted
        return $this->goBack();
    }

    /**
     * Logs out the user.
     *
     * @return \yii\web\Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /*----------------*
     * PASSWORD RESET *
     *----------------*/

    /**
     * Sends email that contains link for password reset action.
     *
     * @return string|\yii\web\Response
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();

        if (!$model->load(Yii::$app->request->post()) || !$model->validate()) {
            return $this->render('requestPasswordResetToken', ['model' => $model]);
        }

        if (!$model->sendEmail()) {
            Yii::$app->session->setFlash('error', Yii::t('app',
                'Sorry, we are unable to reset password for email provided.'));
            return $this->refresh();
        }

        Yii::$app->session->setFlash('success', Yii::t('app', 'Check your email for further instructions.'));

        return $this->goHome();
    }

    /**
     * Resets password.
     *
     * @param  string $token Password reset token.
     * @return string|\yii\web\Response
     *
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if (!$model->load(Yii::$app->request->post()) || !$model->validate() || !$model->resetPassword()) {
            return $this->render('resetPassword', ['model' => $model]);
        }

        Yii::$app->session->setFlash('success', Yii::t('app', 'New password was saved.'));

        return $this->goHome();
    }

//------------------------------------------------------------------------------------------------//
// SIGN UP / ACCOUNT ACTIVATION
//------------------------------------------------------------------------------------------------//

    /**
     * Signs up the user.
     * If user need to activate his account via email, we will display him
     * message with instructions and send him account activation email with link containing account activation token.
     * If activation is not necessary, we will log him in right after sign up process is complete.
     * NOTE: You can decide whether or not activation is necessary, @see config/params.php
     *
     * @return string|\yii\web\Response
     */
    public function actionSignup()
    {
        // get setting value for 'Registration Needs Activation'
        $rna = Yii::$app->params['rna'];

        // if 'rna' value is 'true', we instantiate SignupForm in 'rna' scenario
        $model = $rna ? new SignupForm(['scenario' => 'rna']) : new SignupForm();

        // if validation didn't pass, reload the form to show errors
        if (!$model->load(Yii::$app->request->post()) || !$model->validate()) {
            return $this->render('signup', ['model' => $model]);
        }

        // try to save user data in database, if successful, the user object will be returned
        $user = $model->signup();

        if (!$user) {
            // display error message to user
            Yii::$app->session->setFlash('error', Yii::t('app', 'We couldn\'t sign you up, please contact us.'));
            return $this->refresh();
        }

        // user is saved but activation is needed, use signupWithActivation()
        if ($user->status === User::STATUS_INACTIVE) {
            $this->signupWithActivation($model, $user);
            return $this->refresh();
        }

        // now we will try to log user in
        // if login fails we will display error message, else just redirect to home page

        if (!Yii::$app->user->login($user)) {
            // display error message to user
            Yii::$app->session->setFlash('warning', Yii::t('app', 'Please try to log in.'));

            // log this error, so we can debug possible problem easier.
            Yii::error('Login after sign up failed! User '.Html::encode($user->username).' could not log in.');
        }

        return $this->goHome();
    }

    /**
     * Tries to send account activation email.
     *
     * @param $model
     * @param $user
     */
    private function signupWithActivation($model, $user)
    {
        // sending email has failed
        if (!$model->sendAccountActivationEmail($user)) {
            // display error message to user
            Yii::$app->session->setFlash('error', Yii::t('app',
                'We couldn\'t send you account activation email, please contact us.'));

            // log this error, so we can debug possible problem easier.
            Yii::error('Signup failed! User '.Html::encode($user->username).' could not sign up. 
                Possible causes: verification email could not be sent.');
        }

        // everything is OK
        Yii::$app->session->setFlash('success', Yii::t('app', 'Hello').' '.Html::encode($user->username). '. ' .
            Yii::t('app', 'To be able to log in, you need to confirm your registration. 
                Please check your email, we have sent you a message.'));
    }

    /*--------------------*
     * ACCOUNT ACTIVATION *
     *--------------------*/

    /**
     * Activates the user account so he can log in into system.
     *
     * @param  string $token
     * @return \yii\web\Response
     *
     * @throws BadRequestHttpException
     */
    public function actionActivateAccount($token)
    {
        try {
            $user = new AccountActivation($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if (!$user->activateAccount()) {
            Yii::$app->session->setFlash('error', Html::encode($user->username). Yii::t('app',
                    ' your account could not be activated, please contact us!'));
            return $this->goHome();
        }

        Yii::$app->session->setFlash('success', Yii::t('app', 'Success! You can now log in.').' '.
            Yii::t('app', 'Thank you').' '.Html::encode($user->username).' '.Yii::t('app', 'for joining us!'));

        return $this->redirect('login');
    }
}
