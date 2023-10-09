<h1>Hello World</h1>

 @foreach ($tipMessages as $tipMessage)
     <li>{{$tipMessage->message}}</li>
 @endforeach