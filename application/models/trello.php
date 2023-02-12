<?php 
class trello{
    public function get(){
        $url='https://api.trello.com/1/boards/615e121e55742a5a6ba346bc/cards?key=8b326737f43e5a629e80b9c95b0a6016&token=fcd44ca66295583ff083eb88f93ef882c4836355b6edce681b2b9fc631c15517';
        $json= file_get_contents($url);
        $array=jason_decode($json, true);
        return $array;
    }
    public function get_id($url){
        $json=file_get_contents($url);
        $array=jason_decode($json, true);
        
    }
}
?>