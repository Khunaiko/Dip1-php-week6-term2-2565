<php?
$role = 'subscribe';
$message ='';

switch($role){
  case 'admin':
    $message = 'welcome, Admin';
    break;
 case 'author':
    $message = 'welcome, Author';
    break;
    case 'subscribe':
        $message = 'welcome, subscribe';
        break;
default:
$message = 'sorry';
}
print($message);
?>