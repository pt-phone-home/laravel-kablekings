@component('mail::message')
# You have a new message from Kable Kings Website<br>

{{$email->name}} has sent a message. <br>

Their message is as follows: <br>

{{$email->message}} <br>
<hr>
You can reach them on: <br>

Contact Number: {{$email->phone}} <br>
Email: {{$email->email}} <br>



Thanks,<br>
Rocket.Chip Web Solutions
@endcomponent
