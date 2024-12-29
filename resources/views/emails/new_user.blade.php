@component('emails.layouts')
    <p> Kami mengonfirmasi bahwa akun Anda telah berhasil dibuat. Berikut adalah informasi akun Anda: </p>

    <div
        style="background: #2d2f31;
                    color: #fff;
                    padding: 10px 15px;
                    border-radius: 5px;
                    margin: 30px;
                    width: 80%;
                    margin: 25px auto;
                    font-size: 16px;
                ">
        <table>
            <tr>
                <td> Email </td>
                <td> : </td>
                <td>
                    <span class="email"> {{ $user->email }} </span>
                </td>
            </tr>
            <tr>
                <td> Password </td>
                <td> : </td>
                <td> {{ $user->password_plain }} </td>
            </tr>
        </table>
    </div>

    <span> (Jika Anda belum mengubahnya, harap segera mengganti kata sandi setelah login pertama)

        <div style="margin: 30px 0px; margin-bottom: 5px;">
            <p style="margin-bottom: 5px;">Silakan klik tombol di bawah ini untuk login ke sistem:</p>
            <a href="{{ route('login') }}" class="button button-primary" target="_blank" rel="noopener">Login</a>
        </div>

        <div style="margin-top: 20px;">
            <p>
                Salam, <br />
                Inventory Management
            </p>
        </div>
    @endcomponent
