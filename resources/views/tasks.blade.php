<h1>Tasks</h1>
<ul>
    @foreach($tasks as $key => $task)
    <li><a href="/tasks/show/{{$key}}">{{$task}}</a></li>   
    @endforeach   
    </ul>

<!--
$output= '<ul>';
      foreach ($tasks as $key => $task){
          $output .='<li><a href="/tasks/show/'.$key.'">'.$task.'</a></li>';
          } 
      $output.='</ul>';  -->