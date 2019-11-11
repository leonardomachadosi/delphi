<?php

include("connection.php");

$fs_options = $_POST['fs_options'];
$re_options = $_POST['re_options'];
$pe_options = $_POST['pe_options'];
$op_options = $_POST['op_options'];
$sec_options = $_POST['sec_options'];
$comp_options = $_POST['comp_options'];
$main_options = $_POST['main_options'];
$transf_options = $_POST['transf_options'];
$epeic_options = $_POST['epeic_options'];
$context_options = $_POST['context_options'];
$mob_options = $_POST['mob_options'];
$att_options = $_POST['att_options'];
$calm_options = $_POST['calm_options'];
$transp_options = $_POST['transp_options'];

if ($fs_options == null) {
    echo 0;
    return;
} else {
    if ($fs_options == 0) {
        $fs_options = 1;
    } else if ($fs_options == 1) {
        $fs_options = 2;
    } else if ($fs_options) {
        $fs_options = 3;
    }
}
if ($re_options == null) {
    echo 0;
    return;
} else {
    if ($re_options == 0) {
        $re_options = 1;
    } else if ($re_options == 1) {
        $re_options = 2;
    } else if ($re_options) {
        $re_options = 3;
    }
}

if ($pe_options == null) {
    echo 0;
    return;
} else {
    if ($pe_options == 0) {
        $pe_options = 1;
    } else if ($pe_options == 1) {
        $pe_options = 2;
    } else if ($pe_options) {
        $pe_options = 3;
    }
}
if ($op_options == null) {
    echo 0;
    return;
} else {
    if ($op_options == 0) {
        $op_options = 1;
    } else if ($op_options == 1) {
        $re_options = 2;
    } else if ($op_options) {
        $op_options = 3;
    }
}
if ($sec_options == null) {
    echo 0;
    return;
} else {
    if ($sec_options == 0) {
        $sec_options = 1;
    } else if ($sec_options == 1) {
        $sec_options = 2;
    } else if ($sec_options) {
        $sec_options = 3;
    }
}
if ($comp_options == null) {
    echo 0;
    return;
} else {
    if ($comp_options == 0) {
        $comp_options = 1;
    } else if ($comp_options == 1) {
        $comp_options = 2;
    } else if ($comp_options) {
        $comp_options = 3;
    }
}
if ($main_options == null) {
    echo 0;
    return;
} else {
    if ($main_options == 0) {
        $main_options = 1;
    } else if ($main_options == 1) {
        $main_options = 2;
    } else if ($main_options) {
        $main_options = 3;
    }
}
if ($transf_options == null) {
    echo 0;
    return;
} else {
    if ($transf_options == 0) {
        $transf_options = 1;
    } else if ($transf_options == 1) {
        $transf_options = 2;
    } else if ($transf_options) {
        $transf_options = 3;
    }
}
if ($epeic_options == null) {
    echo 0;
    return;
} else {
    if ($epeic_options == 0) {
        $epeic_options = 1;
    } else if ($epeic_options == 1) {
        $epeic_options = 2;
    } else if ($epeic_options) {
        $epeic_options = 3;
    }
}
if ($context_options == null) {
    echo 0;
    return;
} else {
    if ($context_options == 0) {
        $context_options = 1;
    } else if ($context_options == 1) {
        $context_options = 2;
    } else if ($context_options) {
        $context_options = 3;
    }
}
if ($mob_options == null) {
    echo 0;
    return;
} else {
    if ($mob_options == 0) {
        $mob_options = 1;
    } else if ($mob_options == 1) {
        $mob_options = 2;
    } else if ($mob_options) {
        $mob_options = 3;
    }
}
if ($att_options == null) {
    echo 0;
    return;
} else {
    if ($att_options == 0) {
        $att_options = 1;
    } else if ($att_options == 1) {
        $att_options = 2;
    } else if ($att_options) {
        $att_options = 3;
    }
}
if ($calm_options == null) {
    echo 0;
    return;
} else {
    if ($calm_options == 0) {
        $calm_options = 1;
    } else if ($calm_options == 1) {
        $calm_options = 2;
    } else if ($calm_options) {
        $calm_options = 3;
    }
}
if ($transp_options == null) {
    echo 0;
    return;
} else {
    if ($transp_options == 0) {
        $transp_options = 1;
    } else if ($transp_options == 1) {
        $transp_options = 2;
    } else if ($transp_options) {
        $transp_options = 3;
    }
}

$expert_id = 1;

//

//1,Functional Suitability

$q = "INSERT INTO UF09_ANSWER(FKUF09UF04_COD_EXPERT, 
                        FKUF09UF01_COD_CHARACTERISTIC,
                        FKUF09UF03_COD_QUALIFIER,
                        UF09_DATE) VALUES (" . $expert_id . ",1, " . $fs_options . " , current_timestamp)";
//2,Reliability
$q = $q . ", (" . $expert_id . ", 2, " . $re_options . ", current_timestamp)";
//3,Performance efficiency
$q = $q . ", (" . $expert_id . ", 3, " . $pe_options . ", current_timestamp)";
//4,Operability
$q = $q . ", (" . $expert_id . ", 4, " . $op_options . ", current_timestamp)";
//5,Security
$q = $q . ", (" . $expert_id . ", 5, " . $sec_options . ", current_timestamp)";
//6,Compatibility
$q = $q . ", (" . $expert_id . ", 6, " . $comp_options . ", current_timestamp)";
//7,Maintainability
$q = $q . ", (" . $expert_id . ", 7, " . $main_options . ", current_timestamp)";
//8,Transferability
$q = $q . ", (" . $expert_id . ", 8, " . $transf_options . ", current_timestamp)";
//9,EPI.C
$q = $q . ", (" . $expert_id . ", 9, " . $epeic_options . ", current_timestamp)";
//10,Context-awareness
$q = $q . ", (" . $expert_id . ", 10, " . $context_options . ", current_timestamp)";
//11,Mobility
$q = $q . ", (" . $expert_id . ", 11, " . $mob_options . ", current_timestamp)";
//12,Attention
$q = $q . ", (" . $expert_id . ", 12, " . $att_options . ", current_timestamp)";
//13,Calmness
$q = $q . ", (" . $expert_id . ", 13, " . $calm_options . ", current_timestamp)";
//14,Transparency
$q = $q . ", (" . $expert_id . ", 14, " . $transp_options . ", current_timestamp);";
pg_query($conn, $q) or die("Não salvou");

echo 1;

?>
