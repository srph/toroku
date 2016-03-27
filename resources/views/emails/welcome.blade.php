Greetings, <br>
<br>
Welcome to Valiant ROSE, <strong>{{ $username }}</strong>! We're excited to meet you in-game. However, to proceed, you may need to verify your email. Here's the link to your <strong><a href="{{ route('register.confirmation', ['code' => $code ]) }}">email confirmation</a></strong>.<br>
<br>
If that doesn't work, you please paste this link to your address bar instead -> <strong><a href="{{ route('register.confirmation', ['code' => $code]) }}">{{ route('register.confirmation', ['code' => $code ]) }}</a></strong>.<br>
<br>
<strong>Happy Playing</strong>!<br>
<br>
Regards,<br>
<strong>Valiant ROSE Team</strong>