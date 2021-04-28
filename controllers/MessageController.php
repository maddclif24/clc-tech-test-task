<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Message;
use Yii;

class MessageController extends Controller
{
    public function actionIndex()
    {
        $request = Yii::$app->request;
        if ($request->isPost) {
            $param = $request->getBodyParam('message');
            $message = new Message();
            $message->text = $param;
            $message->save();
        }

        $messages = Message::find();

        return $this->render('index', [
            'messages' => $messages->all(),
        ]);
    }

    public function actionNew()
    {
        return $this->render('new');
    }

}