Hello {{$user->name}}
Thank you for creating your account. Please verify your email using this link:
{{route('verify', $user->verification_token)}}