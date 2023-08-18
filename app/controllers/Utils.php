<?php 

class Utils{

    public function getAlertMessages($type, $message){
        $typeAlert = "";
        $icon = "";
        switch($type){
            case "SUCCESS":
                $typeAlert = "alert-success";
                $icon = "check-circle-fill";
                break;
            case "INFO":
                $typeAlert = "alert-primary";
                $icon = "info-fill";
                break;
            case "WARNING":  
                $typeAlert = "alert-warning";
                $icon = "exclamation-triangle-fill";
                break;
            case "DANGER":
                $typeAlert = "alert-danger";
                $icon = "exclamation-triangle-fill";
                break;      
        }
        $alert = '<div class="alert '.$typeAlert.' d-flex align-items-center justify-content-between fade show" role="alert">
                <div><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#'.$icon.'"/></svg>
                        '.$message.'</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>'; 
                return $alert; 
    }
}
?>