<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class TaskController extends Controller
{
   public function  getIndex(){
      $tasks=array ('Meeting my family', 'Remember nour', 'do tasks'); 
      $output='<h1>TASKS</h1>';
      $output.= '<ul>';
      foreach ($tasks as $key => $task){
          $output .='<li><a href="/tasks/show/'.$key.'">'.$task.'</a></li>';
          } 
      $output.='</ul>';
      return $output;
   }
 public function  getShow($id){
      $tasks=array ('Meeting my family', 'Remember nour', 'do tasks');
      return $tasks[$id];
   }
     
   public function  getWelcome(){
      $text='Hello My Team We Can Do It!';
      return view('welcome',array('text'=>$text));
   }
      }
