<?php
$uri=explode("/",$_SERVER['REQUEST_URI']);
$sri=explode("/",$_SERVER['REQUEST_URI']);

switch ($uri[1] && $sri[1]) {
  case '':
    include APP_PATH."/first_site/view/login.html";
    break;
    case 'enter':
      include APP_PATH."/first_site/view/enter.php";
      break;
      case 'login':
        include APP_PATH."/first_site/view/login.html";
        break;
        case 'register':
          include APP_PATH."/first_site/view/register.html";
          break;
          case 'pass':
            include APP_PATH."/first_site/view/pass.php";
            break;
            case 'dashboard':
              include APP_PATH."/first_site/view/dashboard.html";
              break;
              case 'message':
                include APP_PATH."/first_site/view/message.php";
                break;
                case 'dash':
                  include APP_PATH."/first_site/view/dash.php";
                  break;
                  case 'reload':
                    include APP_PATH."/first_site/view/reload.php";
                    break;


  default:
    // code...
    break;
}
 ?>
