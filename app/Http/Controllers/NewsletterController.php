<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers,email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('anchor', 'subscribe-form');
        }

        // Сохранение email в базу данных
        DB::table('subscribers')->insert([
            'email' => $request->input('email'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Отправка подтверждающего письма
        $unsubscribeLink = route('unsubscribe', ['email' => $request->input('email')]);
        $messageBody = 'Спасибо за подписку на наши новости. Теперь вы будете получать последние обновления.
                        Чтобы отписаться от рассылки, перейдите по следующей ссылке: ' . $unsubscribeLink;

        Mail::raw($messageBody, function ($message) use ($request) {
            $message->to($request->input('email'))
                ->subject('Подтверждение подписки на новости');
        });

        return redirect()->back()->with('success', 'Подписка успешно оформлена. Проверьте ваш email для подтверждения.')->with('anchor', 'subscribe-form');
    }

    public function unsubscribe($email)
    {
        // Удаление email из базы данных
        DB::table('subscribers')->where('email', $email)->delete();

        return redirect()->back()->with('success', 'Вы успешно отписались от рассылки.')->with('anchor', 'subscribe-form');
    }
}
