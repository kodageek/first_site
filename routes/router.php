<?php
$uri=explode("/",$_SERVER['REQUEST_URI']);

switch ($uri[1]) {
  case '':
    include APP_PATH."/view/login.html";
    break;
    case 'enter':
      include APP_PATH."/view/enter.php";
      break;
      case 'login':
        include APP_PATH."/view/login.html";
        break;
        case 'register':
          include APP_PATH."/view/register.html";
          break;
          case 'pass':
            include APP_PATH."/view/pass.php";
            break;
            case 'dashboard':
              include APP_PATH."/view/dashboard.html";
              break;
              case 'message':
                include APP_PATH."/view/message.php";
                break;
                case 'dash':
                  include APP_PATH."/view/dash.php";
                  break;
                  case 'reload':
                    include APP_PATH."/view/reload.php";
                    break;


  default:
    // code...
    break;
}
 ?>
