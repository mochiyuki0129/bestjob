<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\UserToken;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;

class UserResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $userToken;

    /**
     * コンストラクト
     *
     * @param User $user
     * @param UserToken $userToken
     */
    public function __construct(
        User $user,
        UserToken $userToken
    ) {
        $this->user = $user;
        $this->userToken = $userToken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $tokenParam = ['reset_token' => $this->userToken->token];
        $now = Carbon::now();

        // 48時間後を期限とした署名付きURLを生成
        $url = URL::temporarySignedRoute('editPassword', $now->addHours(48), $tokenParam);

        return $this->from('test@test.co.jp', 'Best Job!!')
            ->to($this->user->email)
            ->subject('パスワードをリセットする')
            ->view('mails.passwordResetMail')
            ->with([
                'user' => $this->user,
                'url' => $url,
            ]);
    }
}
