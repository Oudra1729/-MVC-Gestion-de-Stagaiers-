<?php
require_once 'controllers/stagiaier_controller.php';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case "list":
            list_stagiaierAction();
            break;
        case "create":
            createAction();
            break;
        case "destroy":
            destroyAction($id);
            break;
        case "edit":
            editAction();
            break;
        case "store":
            storeAction();
            break;
        case "update":
            updateAction();
            break;
        case "delete":
            deleteAction();
            break;
    }
} else {
    header("Location: index.php?action=list");
    exit;
}
