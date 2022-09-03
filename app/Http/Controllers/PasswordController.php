<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\UserTokenRepositoryInterface;
use App\Http\Requests\SendEmailRequest;
use App\Mail\UserResetPasswordMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Exception;

class PasswordController extends Controller
{
    private $userRepository;
    private $userTokenRepository;

    private const MAIL_SENDED_SESSION_KEY = 'user_reset_password_mail_sended_action';
    private const UPDATE_PASSWORD_SESSION_KEY = 'user_update_password_action';

    public function __construct(
        UserRepositoryInterface $userRepository,
        UserTokenRepositoryInterface $userTokenRepository,
    ) {
        $this->userRepository = $userRepository;
        $this->userTokenRepository = $userTokenRepository;
    }
    // パスワードリセット画面表示

    public function reset()
    {
        return view('maines.reset');
    }

    // パスワードリセット送信処理
    public function resetSend(Request $request)
    {
        try {
            $user = $this->userRepository->findFromEmail($request->email);
            $userToken = $this->userTokenRepository->updateOrCreateUserToken($user->id);
            Log::info(__METHOD__ . '...ID:' . $user->id . 'のユーザーにパスワード再設定用メールを送信します。');
            Mail::send(new UserResetPasswordMail($user, $userToken));
            Log::info(__METHOD__ . '...ID:' . $user->id . 'のユーザーにパスワード再設定用メールを送信しました。');
        } catch (Exception $e) {
            Log::error(__METHOD__ . '...ユーザーへのパスワード再設定用メール送信に失敗しました。 request_email = ' . $request->email . ' error_message = ' . $e);
            return redirect()->route('reset')
                ->with('flash_message', '処理に失敗しました。時間をおいて再度お試しください。');
        }
        session()->put(self::MAIL_SENDED_SESSION_KEY, 'user_reset_password_send_email');

        return redirect()->route('sendMail');
    }

    // パスワードリセットメール送信完了画面
    public function sendComplete()
    {
        // メール送信処理で保存したセッションキーに値がなければアクセスできないようにすることで不正アクセスを防ぐ
        if (session()->pull(self::MAIL_SENDED_SESSION_KEY) !== 'user_reset_password_send_email') {
            return redirect()->route('reset')
                ->with('flash_message', '不正なリクエストです。');
        }

        return view('mails.sendMail');
    }

    // パスワード再設定画面表示
    public function editPassword(Request $request)
    {
        if (!$request->hasValidSignature()) {
            abort(403, 'URLの有効期限が過ぎたためエラーが発生しました。パスワードリセットメールを再発行してください。');
        }
        $resetToken = $request->reset_token;
        try {
            $userToken = $this->userTokenRepository->getUserTokenfromToken($resetToken);
        } catch (Exception $e) {
            Log::error(__METHOD__ . ' UserTokenの取得に失敗しました。 error_message = ' . $e);
            return redirect()->route('reset')
                ->with('flash_message', __('パスワードリセットメールに添付されたURLから遷移してください。'));
        }

        return view('mails.editPassword')
            ->with('userToken', $userToken);
    }

    // パスワード再設定処理
    public function update(Request $request)
    {
        try {
            $userToken = $this->userTokenRepository->getUserTokenfromToken($request->reset_token);
            $this->userRepository->updateUserPassword($request->password, $userToken->user_id);
            Log::info(__METHOD__ . '...ID:' . $userToken->user_id . 'のユーザーのパスワードを更新しました。');
        } catch (Exception $e) {
            Log::error(__METHOD__ . '...ユーザーのパスワードの更新に失敗しました。...error_message = ' . $e);
            return redirect()->route('reset')
                ->with('flash_message', __('処理に失敗しました。時間をおいて再度お試しください。'));
        }
        $request->session()->put(self::UPDATE_PASSWORD_SESSION_KEY, 'user_update_password');

        return redirect()->route('passwordComplete');
    }

    // パスワード再設定完了画面
    public function edited()
    {
        // パスワード更新処理で保存したセッションキーに値がなければアクセスできないようにすることで不正アクセスを防ぐ
        if (session()->pull(self::UPDATE_PASSWORD_SESSION_KEY) !== 'user_update_password') {
            return redirect()->route('reset')
                ->with('flash_message', '不正なリクエストです。');
        }

        return view('indexes.login');
    }
}
